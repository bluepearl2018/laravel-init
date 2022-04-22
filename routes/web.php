<?php


Route::middleware(['web', 'auth'])->group(function () {
	Route::get('init', function () {
		return view('init::install', ['message' => 'Welcome to Eutranet\'s initalizer']);
	})->name('init');
});