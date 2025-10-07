<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'receiver',
        'amount',
        'timestamp',
        'status',
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
    ];

    public $timestamps = false;
}

