<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Double extends Model
{
    use HasFactory;

    protected $table = 'deposite_double';

    protected $fillable = [
        'user_id',
        'date',
        'member_date',
        'maturity_period',
        'vyaj_amount',
        'login_id',
    ];

}
