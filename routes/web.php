<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baseController;
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

Route::get('/', [baseController::class, 'start'])->name('/');

Route::post('/f', [baseController::class, 'forward'])->name('forward');
Route::post('/l', [baseController::class, 'left'])->name('left');
Route::post('/s', [baseController::class, 'stop'])->name('stop');
Route::post('/r', [baseController::class, 'right'])->name('right');
Route::post('/b', [baseController::class, 'backward'])->name('backward');

Route::get('/retrieve', [baseController::class, 'retrieve'])->name('/retrieve');