<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\EditController;

Route::get('/', [BarangController::class, 'index']); 
Route::post('/inputBarang', [BarangController::class, 'store']);

Route::get('/view', [EditController::class, 'index']);
Route::get('/editBarang/{id}', [EditController::class, 'editBarang']);
Route::post('/updateBarang/{id}', [EditController::class, 'updateBarang']);

Route::get('/delete/{id}', [EditController::class, 'destroy']);