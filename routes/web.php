<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {

    defer(function () {
        sleep(3);
        logger('3 seconds later');
    });
    return 'Submitted';
});

