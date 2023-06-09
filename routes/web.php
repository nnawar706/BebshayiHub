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

Route::get('login', [AuthController::class, 'index_login'])->name('login_page');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('registration', [AuthController::class, 'index_registration'])->name('register_page');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('investor_dashboard', [AuthController::class, 'investor_dashboard']);