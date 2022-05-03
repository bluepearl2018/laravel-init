<?php

use Eutranet\Commons\Http\Controllers\LanguageLineController;
use Eutranet\Init\Http\Controllers\InstallStatusController;
use Eutranet\Init\Http\Controllers\MenuController;
use Eutranet\Init\Http\Controllers\MediaController;

Route::middleware(['web', 'auth:admin', 'role:super-admin'])->prefix('setup')->name('setup.')->group(function () {
    Route::resource('install_statuses', InstallStatusController::class)->names('install-statuses');
    Route::resource('language-lines', LanguageLineController::class)->names('language-lines');
    Route::resource('media', MediaController::class)->names('media');
    Route::resource('menus', MenuController::class)->names('menus');
    Route::resource('users', UserController::class)->names('users');
});
