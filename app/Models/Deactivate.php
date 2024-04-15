<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deactivate extends Model
{
    use HasFactory;
    protected $table = 'deactivates';
    protected $fillable = [
    'user_id',
    'deactivate_date',
    'amount',
    'login_id',
];

}
