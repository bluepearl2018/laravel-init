<?php

namespace Eutranet\Init\Http\Controllers;

use App\Http\Controllers\Controller;
use Eutranet\Init\Interfaces\PackageInfo;
use Illuminate\Contracts\View\View;

/**
 * The checkup controller allows administrators, and especially, the super administrator
 * to check package installation
 */
class CheckupController extends Controller implements PackageInfo
{
	// Todo develop this
	protected string $packageName;
	public function __construct($packageName)
	{

	}

	/**
	 * @param $packageName
	 * @return View
	 */
	public function checkMe($packageName): View
	{
		return view('init::config', ['message' => 'test']);
	}

}