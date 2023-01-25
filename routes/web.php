<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


// Auth Routes
Route::get('/facebook/login', [AuthController::class, 'facebookLogin'])->name('facebook.login');
Route::get('/facebook/callback', [AuthController::class, 'facebookCallback'])->name('facebook.callback');

Route::get('/google/login', [AuthController::class, 'googleLogin'])->name('google.login');
Route::get('/google/callback', [AuthController::class, 'googleCallback'])->name('google.callback');