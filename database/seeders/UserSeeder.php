<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // New admin
        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('admin123'),
            'company' => 'Sucden',
        ]);

        // Test Sucden user
        User::create([
            'name' => 'Sucden User',
            'email' => 'sucdenuser@example.com',
            'password' => Hash::make('user123'),
            'company' => 'Sucden',
        ]);

        // Test Amerop user
        User::create([
            'name' => 'Amerop User',
            'email' => 'ameropuser@example.com',
            'password' => Hash::make('user123'),
            'company' => 'Amerop',
        ]);
    }
}

