<?php

use App\Http\Controllers\AuthnController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [AuthnController::class, 'registrationForm']);
Route::post('/register', [AuthnController::class, 'register']);
Route::get('/login', [AuthnController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthnController::class, 'login']);
Route::get('/verification/{user}/{token}', [AuthnController::class, 'verification']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
