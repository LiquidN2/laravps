<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.dashboard')->name('dashboard');
Route::resource('customers', CustomerController::class);
