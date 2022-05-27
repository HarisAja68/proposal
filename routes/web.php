<?php

use App\Http\Controllers\LPJController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PersetujuanController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('persetujuan', PersetujuanController::class);
Route::resource('pengajuan', PengajuanController::class);
Route::resource('lpj', LPJController::class);
