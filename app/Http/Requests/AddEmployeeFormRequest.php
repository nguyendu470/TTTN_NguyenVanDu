<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class AddEmployeeFormRequest extends FormRequest
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
           
            'usersname'=>'required',
            'address'=>'required',
            'password' => 'min:6|required_with:confilmpassword|same:confilmpassword',
            'confilmpassword' => 'min:6',
            'email'=>[  'required',
            'email:filter,rfc,dns',
            // 'unique:users',
            ValidationRule::unique('users')->ignore($this->id)
            
            
        ],
            

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
