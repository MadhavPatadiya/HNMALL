<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanTotalInterest extends Model
{
    use HasFactory;

    protected $table = 'loan_total_interest'; // If your table name is different, adjust accordingly

    protected $fillable = [
        'user_id',
        'total_interest',
    ];

    public function loanTransaction()
    {
        return $this->belongsTo(LoanTransaction::class, 'user_id');
    }
}
