<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
            'name.required' => 'Debe indicar un nombre',
            'email.required' => 'Debe indicar un email',
            'password.required' => 'Debe indicar una clave'
        ];
    }
}
