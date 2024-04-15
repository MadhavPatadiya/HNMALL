<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\LoanTransaction;


class LoanInterest extends Model
{
    use HasFactory;

    protected $table = 'loan_interest'; // Set the custom table name if needed
    protected $fillable = ['user_id', 'interest_amount', 'date'];

    public function loanTransaction()
    {
        return $this->belongsTo(LoanTransaction::class, 'user_id');
    }

}
