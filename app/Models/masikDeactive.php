<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masikDeactive extends Model
{
    use HasFactory;
    protected $table = 'masik_deactives';

    protected $fillable = ['user_id', 'deactivate_date', 'refund_amount','login_id'];

}