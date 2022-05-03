<?php

namespace Eutranet\Init\Providers;

use Eutranet\Init\Models\Menu;
use Eutranet\Init\Menus\PackageMenu;

class InitMenuServiceProvider extends PackageMenuServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    protected function registerMenu()
    {
        $packageName = 'eutranet-init';
    }
}
