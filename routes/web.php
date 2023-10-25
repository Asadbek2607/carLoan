<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', 'ServiceController@avtokredit_index')->name('avtokredit.index');
// Route::get('cars/{id}', 'ServiceController@car')->name('car');

Route::get('/', [ServiceController::class, 'avtokredit_index'])->name('avtokredit.index');
Route::get('/cars/{id}', [ServiceController::class, 'car'])->name('car');
