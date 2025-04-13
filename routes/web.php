<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HalamanController::class, 'index'] );
Route::get('/Blog', [HalamanController::class, 'Blog'] );
Route::get('/Contact', [HalamanController::class, 'Contact'] );
Route::get('/Gallery', [HalamanController::class, 'Gallery'] );
Route::get('/Hobi', [HalamanController::class, 'Hobi'] );
