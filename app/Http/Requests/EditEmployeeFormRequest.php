<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEmployeeFormRequest extends FormRequest
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
            'email'=>'required',
            'usersname'=>'required',
            'address'=>'required',
            'email'=>'required|email:filter,rfc,dns|unique:users'
            

        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Full name cannot be left blank',
            
            'address.required' => 'Full name cannot be left blank',
            'usersname.required' => 'usersname cannot be left blank',
            'phone.required' => 'phone cannot be left blank',
            'email.required' => 'Full name cannot be left blank'
            

            


            
        ];
        
    }
}
