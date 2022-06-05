<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;

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


/*
|--------------------------------------------------------------------------
| Primary Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['guest']], function(){
    Route::get('/', function(){
        return view('home');
    });
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/login', [AuthController::class, 'index_login']);

    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/register', [AuthController::class, 'index_register']);

});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth', 'CheckRole:user']], function(){
    Route::get('/home', [UserController::class, 'index']);
});

