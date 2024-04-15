<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanReceiptFormRequest extends FormRequest
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
            'yojanano_prakar' => 'nullable|string',
            'receipt_no' => 'nullable|string',
            'date' => 'required|date',
            'total_amount' => 'required|numeric',
            'total_amount_words' => 'required|string',
            'jaminanu_nam' => 'required|string',
            'mobile_no_3' => 'nullable|numeric',
            'cash_500' => 'nullable|integer',
            'cash_200' => 'nullable|integer',
            'cash_100' => 'nullable|integer',
            'cash_50' => 'nullable|integer',
            'cash_20' => 'nullable|integer',
            'cash_1' => 'nullable|integer',
            'login_id' => 'nullable',
        ];
    }
}
