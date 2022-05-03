<?php
namespace Eutranet\Init\Interfaces;

use Illuminate\Contracts\View\View;

/**
 * A trait instead of a repository
 */
interface PackageMenuInterface
{

	public function __construct();

	/**
	 * Should return the hook name for the package menu
	 * @param string $packageName
	 * @return string
	 */
	public function setMenuHook(string $packageName) : string;

	/**
	 * Should return the hook name for the package menu
	 * @param string $packageName
	 * @return string
	 */
	public function setMenuComponent(string $packageName) : string;

}