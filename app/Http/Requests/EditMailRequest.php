<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMailRequest extends FormRequest
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
            'updatemail'=>'required|email:filter,rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'updatemail.required'=>'Vui lòng nhập email',
            'updatemail.email'=>'Email không đúng định dạng',
        ];
    }
}
