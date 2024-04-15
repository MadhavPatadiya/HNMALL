<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    use HasFactory;
    protected $table = 'loan_payment';
    protected $fillable = [
        'user_id',
        'date',
        'receipt_no',
        'amount',
        'amount_words',
        'old_interest',
        'current_interest',
        'debit_interest',
        'total_interest',
        'due_amount',
        'remaining_amount',
        'cash_500',
        'cash_200',
        'cash_100',
        'cash_50',
        'cash_20',
        'cash_10',
        'cash_5',
        'cash_1',
        'login_id',
    ];

}
