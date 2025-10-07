<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Block;

class BlockchainSeeder extends Seeder
{
    public function run(): void
    {
        if (Block::count() === 0) {
            Block::create([
                'index_no' => 0,
                'previous_hash' => '0',
                'current_hash' => hash('sha256', 'genesis'),
                'data' => 'Genesis Block',
            ]);
        }
    }
}

