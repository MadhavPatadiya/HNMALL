<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BachatFromRequest extends FormRequest
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
            'member_no' =>[ 'required', 'string'],

            'member_date' =>[ 'required', 'date'],

            'member_image' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'heir_image_1' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'heir_image_2' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],

            'mr' =>[ 'required', 'string', 'unique:bachats_form,mr'],

            'age' =>[ 'required', 'integer'],

            'village' =>[ 'required', 'string'],

            'address' =>[ 'required', 'string'],

            'taluk' =>[ 'required', 'string'],
            'member_business' =>[ 'required', 'string'],

            'mobile_no_1' =>[ 'required', 'digits:10'],
            'mobile_no_2' =>[ 'nullable', 'digits:10'],

            'city' =>[ 'required', 'string'],

            'percentage' => ['required','in:1,125'],

            'heir_name_1' =>[ 'nullable', 'string'],
            'age_1' =>[ 'nullable', 'integer'],
            'relationship_with_member_1' =>[ 'nullable', 'string'],

            'heir_name_2' =>[ 'nullable', ],
            'age_2' =>[ 'nullable', 'integer'],
            'relationship_with_member_2' =>[ 'nullable', 'string'],

            'member_sign_image' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'heir_sign_image_1' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'heir_sign_image_2' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'sign_on_behalf_of_jan_jagaruti_image' =>[ 'nullable', 'mimes:jpg,jpeg,png' ],
            'login_id' =>[ 'nullable' ],
        ];
    }
}
