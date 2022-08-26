<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanifierSeanceValidator extends FormRequest
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
            'debut' =>'required',
            'fin' =>'required|after:debut'
        ];
    }

    public function messages()
    {
        return[
            'debut.required' => 'Champ Obligatoire !!',
            'fin.required' => 'Champ Obligatoire !!',
            'fin.after' => 'date fin doit être supérieur que date début !! ',
            
           
          ];
    }
}
