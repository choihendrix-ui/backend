<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $request->validate([
            'sender' => 'required|string',
            'receiver' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        $transaction = Transaction::create([
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'amount' => $request->amount,
            'timestamp' => now(),
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Transaction created successfully',
            'data' => $transaction
        ], 201);
    }

    public function getPendingTransactions()
    {
        $transactions = Transaction::where('status', 'pending')->get();
        return response()->json($transactions);
    }
}

