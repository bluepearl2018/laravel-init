<?php

namespace Eutranet\Init\Facades;

use Illuminate\Support\Facades\Facade;
use App;

class PackageMenuFacade extends Facade
{
	protected static function getFacadeAccessor(): string
	{
		return 'package-menu';
	}

	public function display(): string
	{
		return App::get('package-menus');
	}
}