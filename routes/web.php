<?php

use Illuminate\Support\Facades\Route;
use routes\auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('login', [AuthenticatedSessionController::class, 'store']);

