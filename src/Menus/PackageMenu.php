<?php

namespace Eutranet\Init\Menus;

use Illuminate\Support\Collection;
use Eutranet\Init\Models\Menu;

class PackageMenu
{
	public function __construct($packageName)
	{

	}

	public function getItems(string $packagename) : Collection
	{
		return Menu::where('menu_code', $packagename)->get();
	}
}