<?php

Route::middleware(['web', 'auth:admin'])->get('/setup/init/config', function () {
    return view('init::config');
})->name('setup.init.config');

Route::get('install/warning', function () {
    abort('403', 'Not installed');
})->name('install.warning');
