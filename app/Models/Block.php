<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Block extends Model
{
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Block extends Model
{
    protected $fillable = [
        'index_no',
        'previous_hash',
        'current_hash',
        'nonce',
        'timestamp',
<<<<<<< HEAD
    ];

    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class, 'block_transactions', 'block_id', 'transaction_id')
            ->withTimestamps();
    }
        'data',
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
    ];

    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class, 'block_transactions', 'block_id', 'transaction_id')
            ->withTimestamps();
    }
}

