<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('index');
});

// Untuk FormController
Route::resource('/', formController::class);

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('managesurvey', [formController::class, 'managesurvey']);

Route::get('managedosen', function () {
    return view('admin.managedosen');
});

// untuk dosenController
Route::resource('managedosen', dosenController::class);

Route::get('create', function () {
    return view('admin.create');
});

Route::get('admin', function () {
    return view('admin');
});
