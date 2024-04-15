<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanPaymentRequest extends FormRequest
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
            'user_id' => 'required|exists:deposite_form,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'receipt_no' => 'nullable|string',
            'amount_words' => 'required|string',
            'old_interest' => 'nullable|numeric',
            'current_interest' => 'nullable|numeric',
            'debit_interest' => 'nullable|numeric',
            'total_interest' => 'nullable|numeric',
            'due_amount' => 'nullable|numeric',
            'remaining_amount' => 'nullable|numeric',
            'cash_500' => 'nullable|integer',
            'cash_200' => 'nullable|integer',
            'cash_100' => 'nullable|integer',
            'cash_50' => 'nullable|integer',
            'cash_20' => 'nullable|integer',
            'cash_10' => 'nullable|integer',
            'cash_5' => 'nullable|integer',
            'cash_1' => 'nullable|integer',
            'login_id' => 'nullable',
        ];
    }
}
