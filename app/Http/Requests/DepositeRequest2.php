<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositeRequest2 extends FormRequest
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
            'status' => ['required'],
            'member_no' => ['required', 'string'],

            'member_date' => ['required', 'date'],
            'maturity_period' => ['required', 'date'],

            'member_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'heir_image_1' => ['nullable', 'mimes:jpg,jpeg,png'],
            'heir_image_2' => ['nullable', 'mimes:jpg,jpeg,png'],

            'total_amount' => ['required', 'integer'],

            'words' => ['required', 'string'],

            'mr' => ['required', 'string'],

            'age' => ['required', 'integer'],

            'village' => ['required', 'string'],

            'address' => ['required', 'string'],

            'taluk' => ['required', 'string'],
            'member_business' => ['required', 'string'],

            'mobile_no_1' => ['required', 'digits:10'],
            'mobile_no_2' => ['nullable', 'digits:10'],

            'city' => ['required', 'string'],
            'note' => ['nullable', 'string'],

            'heir_name_1' => ['nullable', 'string'],
            'age_1' => ['nullable', 'integer'],
            'relationship_with_member_1' => ['nullable', 'string'],

            'heir_name_2' => ['nullable', ],
            'age_2' => ['nullable', 'integer'],
            'relationship_with_member_2' => ['nullable', 'string'],

            'vyaj_amount' => ['required', 'string'],
            'vyaj_amount_words' => ['required', 'string'],

            'double_amount' => ['nullable','in:option1,option2,option3'],

            'cash_500' =>[ 'integer', 'nullable'],
            'cash_200' =>[ 'integer', 'nullable'],
            'cash_100' =>[ 'integer', 'nullable'],
            'cash_50' =>[ 'integer', 'nullable'],
            'cash_20' => ['integer', 'nullable'],
            'cash_1' => ['integer', 'nullable'],


            'member_sign_image' => ['nullable', 'mimes:jpg,jpeg,png' ],
            'heir_sign_image_1' => ['nullable', 'mimes:jpg,jpeg,png'],
            'heir_sign_image_2' => ['nullable', 'mimes:jpg,jpeg,png' ],
            'sign_on_behalf_of_jan_jagaruti_image' => ['nullable', 'mimes:jpg,jpeg,png' ],
            'login_id' => ['nullable'],

        ];
    }
}
