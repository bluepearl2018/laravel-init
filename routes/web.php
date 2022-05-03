<?php

use Illuminate\Foundation\Application;
use Illuminate\View\Factory;

Route::middleware(['guest', 'web'])->group(function () {

    Route::get(/**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */ '/', function () {
        return view('welcome');
        //	return redirect('/welcome');
    })->name('welcome');


    Route::get('init', function () {
        return view('init::install', ['message' => 'Welcome to Eutranet\'s initalizer']);
    })->name('init');
});
