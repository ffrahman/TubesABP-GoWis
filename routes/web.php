<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\DashboardSewaController;
use App\Http\Controllers\DashboardPaketController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------    ---------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);




Route::get('/sewaKendaraan', [SewaController::class, 'index']);

Route::get('/paketWisata', [PaketWisataController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{news:id}', [NewsController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('dashboard/sewa', DashboardSewaController::class)->middleware('auth');
Route::resource('dashboard/paket', DashboardPaketController::class)->middleware('auth');

Route::resource('dashboard/news', DashboardNewsController::class)->middleware('auth');