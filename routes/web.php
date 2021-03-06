<?php

use App\Http\Controllers\ConsessionController;
use App\Http\Controllers\TvController;
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
Route::get('/',[ConsessionController::class, 'index'])->name('Home');

Route::get('/tv',[TvController::class, 'index'])->name('Tv.home');

Route::post('/insertCons', [ConsessionController::class, 'store'])->name('insertCons');
Route::post('/searchCons', [ConsessionController::class, 'search'])->name('searchCons');
Route::put('/editCons/{id}', [ConsessionController::class, 'update'])->name('editCons');