<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMIWallet extends Model
{
    use HasFactory;

    protected $table = 'emi_wallet';

    protected $fillable = [
        'user_id',
        'total_amount',
        // 'total_amount_cash',
    ];

}
