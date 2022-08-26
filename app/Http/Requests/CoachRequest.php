<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'speciality' => 'required',
            'address' => 'required',
            // 'slug' => 'required|unique:categories',
        ];
    }

    public function messages(){
        return[
            'firstName.required' => ' Champ Obligatoire !',
            'lastName.required' => ' Champ Obligatoire !',
            'phone.required' => ' Champ Obligatoire !',
            'speciality.required' => ' Champ Obligatoire !',
            'Addresse.required' => ' Champ Obligatoire !',
            
          ];
      }
    }

