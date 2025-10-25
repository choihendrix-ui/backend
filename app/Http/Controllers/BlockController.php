<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Services\BlockchainService;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    protected $blockchainService;

    public function __construct(BlockchainService $blockchainService)
    {
        $this->blockchainService = $blockchainService;
    }

    public function mineBlock()
    {
        try {
            $result = $this->blockchainService->addBlock();
            return response()->json(['message' => $result], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function getBlockchain()
    {
        $blocks = Block::with('transactions')->orderBy('index_no')->get();
        return response()->json($blocks);
    }

    public function validateChain()
    {
        $isValid = $this->blockchainService->validateChain();
        return response()->json(['valid' => $isValid]);
    }
}

