<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdherentRequest extends FormRequest
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

    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password'=> 'required',
            'address' => 'required',
            // 'slug' => 'required|unique:categories',
        ];
    }

    public function messages(){
        return[
            'firstName.required' => ' Champ Obligatoire !',
            'lastName.required' => ' Champ Obligatoire !',
            'phone.required' => ' Champ Obligatoire !',
            // 'speciality.required' => ' Champ Obligatoire !',
            'address.required' => ' Champ Obligatoire !',
            'email.required' => ' Champ Obligatoire !',
            'password.required' => ' Champ Obligatoire !',
            
          ];
      }
    }

