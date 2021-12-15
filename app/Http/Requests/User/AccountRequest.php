<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'DOB' => 'max:100',
            'present_address' => 'max:255',
            'permanent_address' => 'max:255',
            'city' => 'max:100',
            'postal_code' => 'max:50',
            'country' => 'max:50',
            'name' => 'max:100', 
            'email' => 'required', 
            'lang' => 'required', 
        ];
    }
}
