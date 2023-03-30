<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'email:filter,rfc,dns',
    ];

    }

    public function messages():array
    {
        return [
            'name.required' => 'Full name cannot be left blank',
            'address.required' => 'Address cannot be left blank',
            'phone.required' => 'phone cannot be left blank',
            'email.required' => 'email cannot be left blank'
     
        ];
    }
}
