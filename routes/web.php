<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

// Untuk FormController
Route::resource('/', formController::class);


Route::get('admin', function () {
    return view('admin/dashboard');
});

Route::get('managesurvey', function () {
    return view('admin/managesurvey');
});

Route::get('managedosen', function () {
    return view('admin/managedosen');
});
