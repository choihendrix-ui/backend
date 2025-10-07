<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BlockController;

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the Blockchain API']);
});

// ✅ Transaction Routes
Route::post('/transaction/create', [TransactionController::class, 'createTransaction']);
Route::get('/transactions/pending', [TransactionController::class, 'getPendingTransactions']);

// ✅ Block Routes
Route::post('/mine', [BlockController::class, 'mineBlock']);
Route::get('/chain', [BlockController::class, 'getBlockchain']);
Route::get('/chain/validate', [BlockController::class, 'validateChain']);
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
