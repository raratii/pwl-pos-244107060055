<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return ('Halo dari simple POS');
});
Route::get('/pos', [TransactionController::class, 'create']) ->name('pos.create');
Route::post('/pos', [TransactionController::class, 'store'])
    ->name('pos.store');
Route::get('/transactions', [TransactionController::class, 'index']);