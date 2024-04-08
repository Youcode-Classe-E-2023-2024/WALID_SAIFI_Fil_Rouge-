<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ForgetpasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/sinup', function () {
    return view('sinup');
});
Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});
Route::get('/profiel', function () {
    return view('Admin.profiel');
});


