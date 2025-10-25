<?php

namespace App\Services;

use App\Models\Block;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class BlockchainService
{
    private $difficulty = 3; // Number of leading zeros for mining

    /**
     * Get the last block from the blockchain.
     */
    public function getLastBlock()
    {
        return Block::orderBy('index_no', 'desc')->first();
    }

    /**
     * Generate hash for a block.
     */
    public function generateHash($index, $previousHash, $timestamp, $transactions, $nonce)
    {
        return hash('sha256', $index . $previousHash . $timestamp . json_encode($transactions) . $nonce);
    }

    /**
     * Add a new block to the chain.
     */
    public function addBlock()
    {
        DB::transaction(function () {
            $lastBlock = $this->getLastBlock();
            $index = $lastBlock ? $lastBlock->index_no + 1 : 0;
            $previousHash = $lastBlock ? $lastBlock->current_hash : '0';
            $nonce = 0;
            $timestamp = now();

            // Get all pending transactions
            $transactions = Transaction::where('status', 'pending')->get();

            if ($transactions->isEmpty()) {
                throw new \Exception("No pending transactions to add to block.");
            }

            // Perform Proof of Work (mining)
            do {
                $hash = $this->generateHash($index, $previousHash, $timestamp, $transactions, $nonce);
                $nonce++;
            } while (substr($hash, 0, $this->difficulty) !== str_repeat('0', $this->difficulty));

            // Save block
            $block = Block::create([
                'index_no' => $index,
                'previous_hash' => $previousHash,
                'current_hash' => $hash,
                'nonce' => $nonce,
                'timestamp' => $timestamp,
            ]);

            // Attach transactions to the new block
            foreach ($transactions as $transaction) {
                $block->transactions()->attach($transaction->id);
                $transaction->status = 'confirmed';
                $transaction->save();
            }
        });

        return "Block added successfully.";
    }

    /**
     * Validate the entire blockchain.
     */
    public function validateChain()
    {
        $blocks = Block::orderBy('index_no')->get();

        foreach ($blocks as $index => $block) {
            if ($index > 0) {
                $previousBlock = $blocks[$index - 1];

                if ($block->previous_hash !== $previousBlock->current_hash) {
                    return false;
                }

                // Recalculate hash
                $transactions = $block->transactions()->get();
                $recalculatedHash = $this->generateHash(
                    $block->index_no,
                    $block->previous_hash,
                    $block->timestamp,
                    $transactions,
                    $block->nonce
                );

                if ($block->current_hash !== $recalculatedHash) {
                    return false;
                }
            }
        }

        return true;
    }
}

