<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\formController;

Route::post('/store-dosen', [dosenController::class, 'store']);

Route::get('/', function () {
    return view('index');
});

// Untuk FormController
Route::resource('/', formController::class);

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('managesurvey', function () {
    return view('admin.managesurvey');
});

Route::get('managedosen', function () {
    return view('admin.managedosen');
});

Route::get('create', function () {
    return view('admin.create');
});

Route::get('admin', function () {
    return view('admin');
});
