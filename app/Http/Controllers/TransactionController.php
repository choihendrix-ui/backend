<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // Get all transactions
    public function index()
    {
        return response()->json(Transaction::all());
    }

    // Create a new transaction
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|string',
            'receiver' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        $transaction = Transaction::create($validated);

        return response()->json($transaction, 201);
    }
}

