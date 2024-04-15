<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RojMedFormRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'date' => ['required', 'date'],
            'reason' => ['required', 'string'],
            'cash_type' => ['required', 'string'],
            'amount' => ['required', 'integer'],
            'login_id' => ['nullable'],
        ];
    }
}
