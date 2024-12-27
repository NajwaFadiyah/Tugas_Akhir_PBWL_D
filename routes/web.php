<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('admin', function () {
    return view('dashboard');
});

Route::get('managesurvey', function () {
    return view('managesurvey');
});

Route::get('managedosen', function () {
    return view('managedosen');
});
