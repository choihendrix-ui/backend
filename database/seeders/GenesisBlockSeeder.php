<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Block;

class GenesisBlockSeeder extends Seeder
{
    public function run(): void
    {
        Block::create([
            'index_no' => 0,
            'previous_hash' => '0',
            'current_hash' => hash('sha256', '0' . now()),
            'nonce' => 0,
            'timestamp' => now(),
        ]);

        echo "✅ Genesis Block Created Successfully!\n";
    }
}

