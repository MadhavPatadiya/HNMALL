<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dikari extends Model
{
    use HasFactory;

    protected $table = 'dikari_form';

    protected $fillable = [
        'member_image',
        'heir_image_1',
        'daughter_image',

        'member_no',

        'receipt_no',

        'status',

        'member_date',

        'mr',

        'age',

        'village',

        'address',

        'taluk',
        'member_business',

        'mobile_no_1',
        'mobile_no_2',
        'city',

        'heir_name_1',
        'age_1',
        'relationship_with_member_1',

        'daughter_name',
        'relationship_with_member_2',
        'birth_date_of_daughter',
        'age_2',

        'amount_date',
        'worth_kariyavar',
        'kariyavar_amount',
        'fix_amount',
        'fix_amount_word',

        'daughter_sign_image',
        'member_sign_image',
        'heir_sign_image_1',
        'sign_on_behalf_of_jan_jagaruti_image',
        'login_id',
    ];
}
