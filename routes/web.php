<?php

Route::middleware(['web'])->group(function () {
	Route::get('init', function () {
		return view('init::install', ['message' => 'Welcome to Eutranet\'s initalizer']);
	})->name('init');
});