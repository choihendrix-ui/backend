<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockTransaction extends Model
{
    protected $table = 'block_transactions';

    protected $fillable = [
        'block_id',
        'transaction_id',
    ];

    public $timestamps = true;
}

