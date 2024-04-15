<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EMIloanFormRequest2 extends FormRequest
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
            'member_date' => ['required', 'date'],
            'status' => ['nullable', 'string'],

            'member_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'heir_image' => ['nullable', 'mimes:jpg,jpeg,png'],

            'mr' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'village' => ['required', 'string'],
            'address' => ['required', 'string'],
            'taluk' => ['required', 'string'],
            'city' => ['required', 'string'],
            'note' => ['nullable', 'string'],

            'member_business' => ['required', 'string'],
            'mobile_no_1' => ['required', 'string'],
            'mobile_no_2' => ['nullable', 'string'],

            'jaminu_nam' => ['required', 'string'],
            'mobile_no_3' => ['required', 'string'],
            'jamin_member_no' => ['required', 'string'],

            'loan_type' => ['required', 'string'], //

            // Product
            'product_name' => ['nullable', 'string'],
            'price' => ['required', 'string'],
            'down_payment' => ['nullable', 'string'],
            'loan_amount' => ['nullable', 'string'], //
            'total_amount' => ['nullable', 'string'],
            'loan_time_period' => ['nullable', 'string'],
            'Interest_amount' => ['nullable', 'string'], //
            'monthly_emi' => ['nullable', 'string'],

            //Cash
            // 'loan_amount_cash' => ['nullable', 'string'], //
            // 'loan_time_period_cash' => ['nullable', 'string'], //
            // 'Interest_amount_cash' => ['nullable', 'string'], //
            // 'total_amount_cash' => ['nullable', 'string'], //
            // 'monthly_emi_cash' => ['nullable', 'string'], //


            'member_sign_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'jamin_sign_image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'jjg_sign_image_2' => ['nullable', 'mimes:jpg,jpeg,png'],
            'login_id' => ['nullable'],
        ];
    }
}