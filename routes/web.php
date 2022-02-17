<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasukController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('shop.beranda.index');
});

Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/masuk', [MasukController::class, 'index']);
Route::post('/proses_masuk', [MasukController::class, 'proses_masuk']);
Route::get('/logout', [MasukController::class, 'logout']);

Route::group(['middleware' => ['auth', 'cek_login:super-admin']], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/logout', [HomeController::class, 'logout']);
});

Route::group(['middleware' => ['auth', 'cek_login:budidaya']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [DashboardController::class, 'logout']);
});