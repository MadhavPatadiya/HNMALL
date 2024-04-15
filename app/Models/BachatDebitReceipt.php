<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BachatDebitReceipt extends Model
{
    use HasFactory;

    protected $table = 'bachat_debit_receipt';

    protected $fillable = [
        'user_id',
        'receipt_no',
        'member_date',
        'deposit',
        'total_amount_words',
        'debit_balance',
        'debit_total_amount_words',
        'old_interest',
        'last_month_interest',
        'total_interest',
        'debit_interest',
        'last_cash_deposit',
        'cash_income',
        'interest_on_withdrawn_deposits',
        'amount_of_interest_withdrawn',
        'cash_500',
        'cash_200',
        'cash_100',
        'cash_50',
        'cash_20',
        'cash_10',
        'cash_5',
        'cash_1',
        'note',
        'login_id',
    ];
    public function bachatsForm()
    {
        return $this->belongsTo(Bachat::class, 'user_id');
    }
}