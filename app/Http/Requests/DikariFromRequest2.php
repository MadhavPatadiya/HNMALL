<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DikariFromRequest2 extends FormRequest
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
            'member_no' => ['required', 'string'],

            'receipt_no' => ['nullable', 'string'],

            'member_date' => ['required', 'date'],

            'status' => ['nullable', 'string'],

            'mr' => ['required', 'string'],

            'age' => ['required', 'integer'],

            'village' => ['required', 'string'],

            'address' => ['required', 'string'],

            'taluk' => ['required', 'string'],
            'member_business' => ['required', 'string'],

            'mobile_no_1' => ['required', 'digits:10'],
            'mobile_no_2' => ['nullable', 'digits:10'],

            'city' => ['required', 'string'],

            'heir_name_1' => ['required', 'string'],
            'age_1' => ['required', 'integer'],
            'relationship_with_member_1' => ['required', 'string'],

            'daughter_name' => ['required', 'string'],
            'relationship_with_member_2' => ['required', 'string'],
            'birth_date_of_daughter' => ['required', 'date'],
            'age_2' => ['required', 'integer'],

            'amount_date' => ['nullable', 'date'],
            'worth_kariyavar' => ['nullable', 'integer'],
            'kariyavar_amount' => ['nullable', 'integer'],
            'fix_amount' => ['nullable', 'integer'],
            'fix_amount_word' => ['nullable', 'string'],

            'daughter_sign_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'member_sign_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'heir_sign_image_1' => ['nullable', 'mimes:jpg,jpeg,png'],
            'sign_on_behalf_of_jan_jagaruti_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'login_id' => ['nullable'],

        ];
    }
}