<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('companies')->insert([
            ['name' => 'TechCorp Inc.', 'address' => 'Makati City', 'email' => 'contact@techcorp.com', 'contact_number' => '09171234567'],
            ['name' => 'Innovate Solutions', 'address' => 'BGC Taguig', 'email' => 'info@innovate.com', 'contact_number' => '09181234567'],
        ]);
    }
}

