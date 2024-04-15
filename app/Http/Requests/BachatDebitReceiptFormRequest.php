<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BachatDebitReceiptFormRequest extends FormRequest
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
            'user_id' => [ 'required', 'integer'],
            'receipt_no' => [ 'string', 'nullable'],
            'member_date' => [ 'required', 'date'],
            'deposit' => [ 'integer', 'nullable'],
            'total_amount_words' => [ 'string', 'nullable'],
            'debit_balance' => [ 'integer', 'nullable'],
            'debit_total_amount_words' => [ 'string', 'nullable'],
            'old_interest' => [ 'required', 'numeric'],
            'last_month_interest' => [ 'required', 'numeric'],
            'total_interest' => [ 'required', 'numeric'],
            'debit_interest' => [ 'integer', 'nullable'],
            'last_cash_deposit' =>[ 'required', 'numeric'],
            'cash_income' => [ 'integer', 'nullable'],
            'interest_on_withdrawn_deposits' => [ 'numeric', 'nullable'],
            'amount_of_interest_withdrawn' => ['numeric','nullable'],
            'cash_500' =>[ 'integer', 'nullable'],
            'cash_200' =>[ 'integer', 'nullable'],
            'cash_100' =>[ 'integer', 'nullable'],
            'cash_50' =>[ 'integer', 'nullable'],
            'cash_20' => ['integer', 'nullable'],
            'cash_10' => ['integer', 'nullable'],
            'cash_5' => ['integer', 'nullable'],
            'cash_1' => ['integer', 'nullable'],
            'note' => ['string', 'nullable'],
            'login_id' => ['nullable'],
        ];
    }
}