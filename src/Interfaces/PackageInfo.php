<?php
namespace Eutranet\Init\Interfaces;

use Illuminate\Contracts\View\View;

/**
 * A trait instead of a repository
 */
interface PackageInfo
{
	/**
	 * @param $packageName
	 */
	public function __construct($packageName);

	/**
	 * @param $packageName
	 * @return View
	 */
	public function checkMe($packageName) : View;
}