<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalJoiningFee extends Model
{
    use HasFactory;

    protected $table = 'fixed_joining_fee';

    protected $fillable = [
        'total_joining_fee',
        'date',
    ];

}