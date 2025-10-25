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

