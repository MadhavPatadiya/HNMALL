<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixDepositeWallet extends Model
{
    use HasFactory;

    protected $table = 'fixdepositewallets';

    protected $fillable = [
        'user_id',
        'balance',
    ];

}
