<?php

use Illuminate\Support\Facades\Route;

// Home route → returns the welcome view
Route::get('/', function () {
    return view('welcome');
});

 