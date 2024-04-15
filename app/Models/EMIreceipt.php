<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMIreceipt extends Model
{
    use HasFactory;
    protected $table = 'monthly_emi';

    protected $fillable = [
        'date',
        'total_amount',
        'remaining_loan_amount',
        'interest_paid',
        'loan_paid',
        'note',
        'login_id',
        // 'remaining_loan_interest',
        // 'remaining_total_loan_amount_cash',
        // 'remaining_loan_amount_cash',
        // 'remaining_loan_interest_cash',
    ];


}