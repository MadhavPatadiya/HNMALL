<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EMIreceiptFormRequest extends FormRequest
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
            'user_id' => 'required',
            'date' => 'required|date',
            'total_amount' => 'nullable|string',
            'remaining_loan_amount' => 'nullable|string',
            'interest_paid' => 'nullable|string',
            'loan_paid' => 'nullable|string',
            'note' => 'nullable|string',
            'login_id' => 'nullable',
            // 'remaining_loan_interest' => 'nullable|string',
            // 'remaining_total_loan_amount_cash' => 'nullable|string',
            // 'remaining_loan_amount_cash' => 'nullable|string',
            // 'remaining_loan_interest_cash' => 'nullable|string',
        ];
    }
}