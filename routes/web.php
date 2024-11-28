<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('home');
});

Route::get('/users', [UsersController::class, 'index']);

Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/{id}', [PropertyController::class, 'show']);

Route::get('/bookings', [BookingController::class, 'index']);



Route::get('/users', [UsersController::class, 'index'])->name('users.index');


Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');


Route::post('/users', [UsersController::class, 'store'])->name('users.store');



