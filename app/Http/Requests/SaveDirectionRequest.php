<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDirectionRequest extends FormRequest
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
            'address'=>'required',
            'colony'=>'required',
            'zipcode'=>'required',
            'id_client'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'address.required'=>'El cliente necesita una dirección',
            'colony.required'=>'El cliente necesita una colonia',
            'zipcode.required'=>'El cliente necesita un código postal'
        ];
    }
}
