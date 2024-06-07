<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fligtController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flight', [fligtController::class, 'index']);
Route::get('/flight/tambah', [fligtController::class, 'create']);
Route::post('/flight/store', [fligtController::class, 'store']);
Route::get('/flight/edit/{id}', [fligtController::class, 'edit']);
Route::put('/flight/update/{id}', [fligtController::class, 'update']);
Route::get('/flight/hapus/{id}', [fligtController::class, 'delete']);
Route::get('/flight/destroy/{id}', [fligtController::class, 'destroy']);

