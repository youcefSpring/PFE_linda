<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExoRequest extends FormRequest
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
            'name' => 'required|min:5',
            'price' => 'required'
        ];
    }

    public function messages(){

        return [
           'name.required'=> 'ce champ est obligatoire !',
           'name.min' => 'ce champ doit contenir au moins 5 caractères',
           'price.required' => 'ce champ est obligatoire !',
        ];
    }
}
