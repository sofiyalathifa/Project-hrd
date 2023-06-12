<?php

use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Master\PositionController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', 'Backend\UserController');
Route::resource('position', 'Master\PositionController');
Route::post('users/{user}/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.password');

