<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::post('/actionlogin', [AuthController::class, 'login']);

Route::get('/login', [AuthController::class, 'index_login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/register', [AuthController::class, 'index_register']);

Route::get('home', [LoginController::class, 'index'])->name('home')->middleware('auth');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



