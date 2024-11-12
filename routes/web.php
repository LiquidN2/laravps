<?php
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.dashboard')->name('dashboard');

Route::view('/customers/create', 'pages.customers.create')->name('customers.create');
Route::view('/customers', 'pages.customers.index')->name('customers.index');
