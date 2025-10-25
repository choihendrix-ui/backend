nano app/Models/User.php<?php nano routes/web.php namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

<<<<<<< HEAD
class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $request->validate([
use Illuminate\Http\Request;
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
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
<<<<<<< HEAD

        return response()->json([
            'message' => 'Transaction created successfully',
            'data' => $transaction
        ], 201);
    }

    public function getPendingTransactions()
    {
        $transactions = Transaction::where('status', 'pending')->get();
        return response()->json($transactions);
        $transaction = Transaction::create($validated);
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)

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

