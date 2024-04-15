<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RojMed extends Model
{
    protected $table = 'roj_med';

    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'reason',
        'cash_type',
        'amount',
        'login_id',
    ];

}
