<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientRequest extends FormRequest
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
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'dateofbirth'=>'required',
            'id_user'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'El cliente necesita un nombre',
            'lastname.required'=>'El cliente necesita un apellido',
            'email.required'=>'El cliente necesita un correo electrónico',
            'phone.required'=>'El cliente necesita un teléfono',
            'dateofbirth.required'=>'El cliente necesita una fecha de cumpleaños'
        ];
    }

}
