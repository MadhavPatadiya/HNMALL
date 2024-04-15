<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanReceipt extends Model
{
    use HasFactory;
    protected $table = 'loan_receipts';

    protected $fillable = [
        'yojanano_prakar',
        'receipt_no',
        'date',
        'total_amount',
        'total_amount_words',
        'jaminanu_nam',
        'mobile_no_3',
        'cash_500',
        'cash_200',
        'cash_100',
        'cash_50',
        'cash_20',
        'cash_1',
        'login_id',
    ];
}
