<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthnController;

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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/dashboard', [ItemController::class, 'index'])->middleware('auth');
Route::get('/dashboard/create', [ItemController::class, 'create'])->middleware('auth');
Route::post('/dashboard/create', [ItemController::class, 'insert'])->middleware('auth');
Route::get('/dashboard/edit/{item}', [ItemController::class, 'edit'])->middleware('auth');
Route::patch('/dashboard/edit/{item}', [ItemController::class, 'update'])->middleware('auth');
Route::get('/dashboard/delete/{item}', [ItemController::class, 'delete'])->middleware('auth');
Route::delete('/dashboard/delete/{item}', [ItemController::class, 'destroy'])->middleware('auth');