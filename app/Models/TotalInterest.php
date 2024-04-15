<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalInterest extends Model
{
    use HasFactory;

    protected $table = 'total_interests';

    protected $fillable = [
        'user_id', 'total_interest',
    ];

}
