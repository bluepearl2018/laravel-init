<?php

namespace Eutranet\Init\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Schema;
use Illuminate\Database\Schema\Blueprint;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		if (!Schema::hasTable('install_statuses')) {
			Schema::create('install_statuses', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->string('package_name');
				$table->boolean('installed')->default(false);
				$table->nullableTimestamps();
			});
		}
		if (DB::table('users')->get()->count() < 1) {
			DB::table('users')->insert(
				[
					[
						'nif' => NULL,
						'name' => 'Demo User',
						'country_id' => NULL,
						'phone' => NULL,
						'email' => 'demo@demo.com',
						'email_verified_at' => NULL,
						'password' => bcrypt('Password'),
						'remember_token' => NULL,
						'created_at' => Carbon::now(),
						'updated_at' => NULL,
						'deleted_at' => NULL,
					],
				]);
		}

	}
}
