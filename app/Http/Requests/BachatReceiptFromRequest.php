<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BachatReceiptFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' =>[ 'required', 'integer'],

            'receipt_no' =>[ 'required', 'string'],
            'member_date' =>[ 'required', 'date'],

            'total_amount' =>[ 'required', 'integer'],
            'total_amount_words' =>[ 'required', 'string'],

            'cash_2000' =>[ 'integer', 'nullable' ],
            'cash_500' =>[ 'integer', 'nullable'],
            'cash_200' =>[ 'integer', 'nullable'],
            'cash_100' =>[ 'integer', 'nullable'],
            'cash_50' =>[ 'integer', 'nullable'],
            'cash_20' =>[' integer', 'nullable'],
        ];

    }
}