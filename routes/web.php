<?php

use Illuminate\Foundation\Application;
use Illuminate\View\Factory;

Route::middleware(['guest', 'web'])->group(function () {
    Route::redirect(/**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */ '/', 'welcome');

    Route::get(/**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */ 'welcome', function () {
        return view('welcome');
        //	return redirect('/welcome');
    })->name('welcome');

    Route::get('init', function () {
        return view('init::install', ['message' => 'Welcome to Eutranet\'s initalizer']);
    })->name('init');
});
