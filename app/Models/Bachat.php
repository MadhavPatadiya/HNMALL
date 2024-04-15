<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bachat extends Model
{
    use HasFactory;

    protected $table = 'bachats_form';

    protected $fillable = [

        'member_no',
        'member_date',

        'member_image',
        'heir_image_1',
        'heir_image_2',

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

        'heir_name_2',
        'age_2',
        'relationship_with_member_2',

        'percentage_1_25',
        'percentage_1',

        'member_sign_image',
        'heir_sign_image_1',
        'heir_sign_image_2',
        'sign_on_behalf_of_jan_jagaruti_image',
        'login_id',
    ];
  public function debitReceipts()
    {
        return $this->hasMany(BachatDebitReceipt::class, 'user_id');
    }
}
