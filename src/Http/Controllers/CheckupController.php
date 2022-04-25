<?php

namespace Eutranet\Init\Http\Controllers;

use App\Http\Controllers\Controller;
use Eutranet\Init\Interfaces\PackageInfo;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\ArrayShape;

/**
 * The checkup controller allows administrators, and especially, the super administrator
 * to check package installation
 */
class CheckupController extends Controller implements PackageInfo
{
	/**
	 * @var string
	 */
	protected string $packageName;

	/**
	 * @param $packageName
	 */
	public function __construct($packageName)
	{
		$this->packageName = $packageName;
	}

	/**
	 * @param $packageName
	 * @return View
	 */
	public function checkMe($packageName): View
	{
		return view('init::config', [
			'packageInfo' => $this->getPackageInfo($packageName)
		]);
	}

	/**
	 * @param $packageName
	 * @return array
	 */
	#[ArrayShape(['name' => "\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed", 'description' => "\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed", 'migrations' => "\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed"])]
	public function getPackageInfo($packageName) : array
	{
		$configFile = $packageName.'::eutranet-'.$packageName;
		return [
			'name' => config($configFile.'.name'),
			'description' => config($configFile.'.description'),
			'migrations' => config($configFile.'.migrations'),
		];
	}
}