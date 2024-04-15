<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMILoan extends Model
{
    use HasFactory;

    protected $table = 'loan_emi_form';

    protected $fillable = [
        'member_no',
        'member_date',
        'status',


        'member_image',
        'heir_image',

        'mr',
        'age',
        'village',
        'address',
        'taluk',
        'city',
        'note',


        'member_business',
        'mobile_no_1',
        'mobile_no_2',

        'jaminu_nam',
        'mobile_no_3',
        'jamin_member_no',

        'loan_type', //

        //product
        'product_name',
        'price',
        'down_payment',
        'loan_amount',//
        'total_amount',
        'loan_time_period',
        'Interest_amount',//
        'monthly_emi',

        //Cash
        // 'loan_amount_cash', //
        // 'loan_time_period_cash', //
        // 'Interest_amount_cash', //
        // 'total_amount_cash', //
        // 'monthly_emi_cash', //

        'member_sign_image',
        'jamin_sign_image',
        'jjg_sign_image_2',
        'login_id',
    ];
}
