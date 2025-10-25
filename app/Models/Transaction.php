<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    protected $fillable = [
        'sender',
        'receiver',
        'amount',
        'timestamp',
        'status',
<<<<<<< HEAD
    ];

    protected $casts = [
        'amount' => 'float',
        'timestamp' => 'datetime',
    ];

    public function blocks(): BelongsToMany
    {
        return $this->belongsToMany(Block::class, 'block_transactions', 'transaction_id', 'block_id')
            ->withTimestamps();
    }
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
    ];

    protected $casts = [
        'amount' => 'float',
        'timestamp' => 'datetime',
    ];

    public function blocks(): BelongsToMany
    {
        return $this->belongsToMany(Block::class, 'block_transactions', 'transaction_id', 'block_id')
            ->withTimestamps();
    }
}

