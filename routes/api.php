<?php
use App\Http\Controllers\BlockchainController;

Route::get('/blocks', [BlockchainController::class, 'index']);
Route::post('/blocks', [BlockchainController::class, 'store']);

use App\Http\Controllers\TransactionController;

Route::get('/transactions', [TransactionController::class, 'index']);
Route::post('/transactions', [TransactionController::class, 'store']);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

