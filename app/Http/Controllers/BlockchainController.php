<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;

class BlockchainController extends Controller
{
    // Get all blocks
    public function index()
    {
        return response()->json(Block::all());
    }

    // Add a new block
    public function store(Request $request)
    {
        $previousBlock = Block::latest('id')->first();

        $index_no = $previousBlock ? $previousBlock->index_no + 1 : 0;
        $previous_hash = $previousBlock ? $previousBlock->current_hash : '0';
        $data = $request->input('data', 'No data provided');

        $current_hash = hash('sha256', $previous_hash . $data . now());

        $block = Block::create([
            'index_no' => $index_no,
            'previous_hash' => $previous_hash,
            'current_hash' => $current_hash,
            'data' => $data,
        ]);

        return response()->json($block, 201);
    }
}

