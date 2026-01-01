<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components-showcase');
});

Route::get('/components', function () {
    return view('components-showcase');
});
