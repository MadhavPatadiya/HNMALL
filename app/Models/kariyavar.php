<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kariyavar extends Model
{
    use HasFactory;

    protected $table = 'kariyavars';

    protected $fillable = [
        'user_id',
        'receipt_no',
        'date',
        'kariyavar',
        'login_id',
    ];

}