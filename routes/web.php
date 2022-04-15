<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard','dashboard');

Route::view('login', 'login');

Route::view('register', 'register');

Route::POST('/login',[LoginController::class,'authenticate']);

Route::post('/registration',[RegisterController::class,'register']);


