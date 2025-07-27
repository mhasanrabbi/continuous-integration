<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // This is random comment
    return view('welcome');
});
