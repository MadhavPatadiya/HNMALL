<?php

namespace App\Models;

use App\Models\Bachat;
use App\Models\TotalInterest;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BachatReceipt extends Model
{
    use HasFactory;

    protected $table = 'bachat_receipt';

    protected $fillables = [
        'receipt_no',
        'member_date',
        'total_amount',
        'total_amount_words',
        "2000",
        "500",
        "200",
        "100",
        "50",
        "20",
    ];
    public function bachat()
    {
        return $this->belongsTo(Bachat::class, 'id');
    }

    public function totalInterest()
    {
        return $this->hasOne(TotalInterest::class, 'user_id');
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'user_id');
    }

}
