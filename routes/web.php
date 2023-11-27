<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatabaseController;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/listkavling', [Controller::class, 'listkavling']);
Route::get('/panduan', [Controller::class, 'panduan']);
// Route::get('/database', [Controller::class, 'database'])
//     ->middleware('auth'); //hanya yang sudah login yang dapat akses
// Route::get('/database/create', [Controller::class, 'create']);

Route::get('/login', [LoginController::class, 'index'])
    ->name('login') //penamaan route
    ->middleware('guest'); //hanya tamu yang dapat akses
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/database/jumlah', [DatabaseController::class, 'jumlah'])->middleware('auth');
Route::resource('/database', DatabaseController::class)
    ->middleware('auth');
