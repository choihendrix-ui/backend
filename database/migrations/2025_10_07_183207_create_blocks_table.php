<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->integer('index_no');
            $table->string('previous_hash');
            $table->string('current_hash');
            $table->integer('nonce'); // <-- This was missing
            $table->timestamp('timestamp');
<<<<<<< HEAD
            $table->text('data')->nullable(); // ✅ Added column
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};

