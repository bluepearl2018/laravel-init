<?php

namespace Eutranet\Init\Console\Commands;

use Illuminate\Support\Facades\File;
use Str;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Artisan;
use DB;
use Illuminate\Database\Query\Builder;
use Schema;
use Illuminate\Database\Schema\Blueprint;
use App;

class InstallPackageCommand extends Command
{

	/**
	 * @var string
	 */
	protected $description;
	/**
	 * @var string
	 */
	protected string $packageName;
	/**
	 * @var bool
	 */
	protected bool $packageIsInstalled;
	/**
	 * @var bool
	 */
	protected bool $installLocked;
	/**
	 * @var mixed
	 */
	protected bool $installStatus;

	/**
	 * @param $packageName
	 * @param $signature
	 */
	public function __construct($packageName, $signature)
	{
		parent::__construct();
		$this->packageName = $packageName;
		$this->signature = $signature;
		$this->description = "Install Eutranet\'s laravel-" . $packageName . " package.";
	}

	/**
	 * @return void
	 */
	public function handle()
	{

		if (!Schema::hasTable('install_statuses')) {
			Schema::create('install_statuses', function (BluePrint $table) {
				$table->bigIncrements('id');
				$table->string('package_name');
				$table->boolean('installed')->default(false);
				$table->nullableTimestamps();
			});
			$this->line('------------------------------------------------------');
			$this->warn("Eutranet's Package Installation Status table created.");
			$this->line('------------------------------------------------------');
		} else {
			$this->line('------------------------------------------------------');
			$this->info("Eutranet's Laravel " . Str::ucfirst($this->packageName) . " installer fired...");
			$this->line('------------------------------------------------------');
		}
		// If never installed
		if (DB::table('install_statuses')
				->where('package_name', $this->packageName)
				->get()->first() === NULL) {
			// Publish the configuration
			DB::table('install_statuses')->insert([
				'package_name' => $this->packageName,
				'installed' => false,
			]);
			$this->warn('Installation processed started.');
		} elseif (DB::table('install_statuses')
				->where('package_name', $this->packageName)
				->where('installed', true)->get()->first() !== NULL) {
			$this->line('------------------------------------------');
			$this->warn('You have already installed this package.');
			$this->line('------------------------------------------');
		}
		// If the installation status is false
		if (DB::table('install_statuses')
				->where('package_name', $this->packageName)
				->where('installed', false)->get()->first() !== NULL) {
			// Then we can try to install the package
			if (!$this->configExists('eutranet-' . $this->packageName . '.php')) {
				$this->publishConfiguration();
				$this->info('Configuration published');
			} else {
				if ($this->shouldOverwriteConfig()) {
					$this->warn('Overwriting configuration file...');
					$this->publishConfiguration($force = true);
				} else {
					$this->warn('Existing configuration was not overwritten');
				}
			}

			// Publish migrations
			$this->publishMigrations();
			$this->info('Migration files have been published.');
			// Migrate
			$this->call('migrate');
			$this->info('Default entries are being inserted into the database. Be patient!');
			// and call seeders
			$databaseSeederClass = "\\Eutranet\\" . Str::studly($this->packageName) . "\\Database\\Seeders\\DatabaseSeeder";
			Artisan::call('db:seed', ['class' => $databaseSeederClass]);
			$this->info('Tables have been seeded...');
			// Until setting the package 'installed... since it was not
			$this->setInstalled($this->packageName);
			$this->line('------------------------------------------');
			$this->info(Str::studly($this->packageName) . ' installed !');
			$this->line('------------------------------------------');
			// But if the package is already installed
		}
	}

	/**
	 * @param $fileName
	 * @return bool
	 */
	private function configExists($fileName): bool
	{
		return File::exists(config_path($fileName));
	}

	/**
	 * @param bool $forcePublish
	 * @return void
	 */
	private function publishConfiguration(bool $forcePublish = false)
	{
		$params = [
			'--provider' => 'Eutranet\\' . Str::studly($this->packageName) . '\\' . Str::studly($this->packageName) . 'ServiceProvider',
			'--tag' => 'eutranet-' . $this->packageName,
		];
		if ($forcePublish === true) {
			$params['--force'] = true;
		}
		$this->call('vendor:publish', $params);
	}

	/**
	 * @return bool
	 */
	private function shouldOverwriteConfig(): bool
	{
		return $this->confirm(
			'Config file already exists. Do you want to overwrite it?',
			false
		);
	}

	/**
	 * @return void
	 */
	private function publishMigrations()
	{
		$params = [
			'--provider' => 'Eutranet\\' . Str::studly($this->packageName) . '\\' . Str::studly($this->packageName) . 'ServiceProvider',
			'--tag' => $this->packageName . '-migrations',
		];
		$this->call('vendor:publish', $params);
	}

	/**
	 * @return void
	 */
	private function setInstalled($packageName)
	{
		if (DB::table('install_statuses')
				->where('package_name', $this->packageName)->get()->first() !== NULL) {
			DB::table('install_statuses')->where('package_name', $packageName)->update(
				[
					'installed' => true,
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				]
			);
		}
	}

	/**
	 * @param $packageName
	 * @return false
	 */
	private function packageIsInstalled($packageName): bool
	{
		if (DB::table('install_statuses')
			->where('package_name', $packageName)
			->where('installed', true)
			->get()) {
			return true;
		}
		return false;
	}

	/**
	 * @return bool
	 */
	private function hasInstallStatusesTable(): bool
	{
		return Schema::hasTable('install_statuses');
	}

	/**
	 * Determine if install_statuses table has an entry for our package
	 * @param $packageName
	 * @return bool
	 */
	private function installStatusHasEntry($packageName): bool
	{
		DB::table('install_statuses')->insert(['package_name' => $packageName, 'installed' => false]);
		$this->info('Row created in install status for the package ' . $packageName . '.');
		return true;
	}

	/**
	 * @param string $migrationFileName
	 * @param Carbon $now
	 * @return string
	 */
	private function generateMigrationName(string $migrationFileName, Carbon $now): string
	{
		$migrationsPath = 'migrations/';

		$len = strlen($migrationFileName) + 4;

		if (\Illuminate\Support\Str::contains($migrationFileName, '/')) {
			$migrationsPath .= Str::of($migrationFileName)->beforeLast('/')->finish('/');
			$migrationFileName = Str::of($migrationFileName)->afterLast('/');
		}

		foreach (glob(database_path("${migrationsPath}*.php")) as $filename) {
			if ((substr($filename, -$len) === $migrationFileName . '.php')) {
				return $filename;
			}
		}

		return database_path($migrationsPath . $now->format('Y_m_d_His') . '_' . Str::of($migrationFileName)->snake()->finish('.php'));
	}

}
