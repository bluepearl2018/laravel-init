<?php

namespace Eutranet\Init;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Eutranet\Init\Console\Commands\InstallInitCommand;
use Eutranet\Init\Http\Middleware\InitMigratedMiddleware;
use Spatie\Permission\Middlewares\RoleMiddleware;
use Spatie\Permission\Middlewares\PermissionMiddleware;
use Illuminate\Contracts\Container\BindingResolutionException;
use Eutranet\Init\View\Composers\InitConfigComposer;
use Eutranet\Init\View\Components\Meta;
use Spatie\Permission\Middlewares\RoleOrPermissionMiddleware;
use Eutranet\Init\Providers\MetaTagsServiceProvider;

class InitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-init')
            ->hasConfigFile(['eutranet-init', 'eutranet-auth', 'translatable', 'translation-loader', 'media-library', 'permission']) // php artisan vendor:publish --tag=your-laravel-init-name-config
            ->hasViews('init')
            ->hasMigration('create_users_table')
            ->hasMigration('create_menus_table')
            ->hasMigration('add_fields_to_users_table')
            ->hasMigration('create_media_table')
            ->hasMigration('create_sessions_table')
            ->hasMigration('create_failed_jobs_table')
            ->hasMigration('create_languages_table')
            ->hasMigration('create_language_lines_table')
            ->hasMigration('create_oauth_access_tokens_table')
            ->hasMigration('create_oauth_auth_codes_table')
            ->hasMigration('create_oauth_clients_table')
            ->hasMigration('create_oauth_personal_access_clients_table')
            ->hasMigration('create_oauth_refresh_tokens_table')
            ->hasMigration('create_password_resets_table')
            ->hasMigration('create_permission_tables')
            ->hasTranslations()
            ->hasAssets()
            ->hasViewComposer('init::config', InitConfigComposer::class)
            ->hasViewComponent('init', Meta::class)
            ->hasRoutes(['setup', 'config', 'web'])
            ->hasCommand(InstallInitCommand::class);
    }

    /**
     * @throws BindingResolutionException
     */
    public function boot()
    {
        parent::boot();
        // ... other things
        $this->registerRoutes();
        $router = $this->app->make(Router::class);

        // Make sure the init package is migrated...
        $router->aliasMiddleware('init-migrated', InitMigratedMiddleware::class);
        $router->pushMiddlewareToGroup('web', 'init-migrated');

        // Please not the role and permission middlewares are aliased here...
        // and event pushed to the web group
        $router->aliasMiddleware('role', RoleMiddleware::class);
        $router->aliasMiddleware('permission', PermissionMiddleware::class);
        $router->aliasMiddleware('role-or-permission', RoleOrPermissionMiddleware::class);
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            $this->loadRoutesFrom(__DIR__ . '/../routes/setup.php');
            $this->loadRoutesFrom(__DIR__ . '/../routes/config.php');
        });
    }

    protected function routeConfiguration(): array
    {
        return [
            // 'middleware' => config('eutranet-frontend.middlewares'),
        ];
    }

    public function register()
    {
        parent::register();
        $this->app->register(MetaTagsServiceProvider::class);
	    $this->mergeConfigFrom(__DIR__.'/../config/eutranet-auth.php', 'auth');
    }
}
