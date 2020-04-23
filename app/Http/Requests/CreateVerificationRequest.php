<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVerificationRequest extends FormRequest
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
            // verificar reglas de validación
            'plate' => 'required',
            'taxinumber' => 'required',
        ];

        //para usarlo se pon en func store(CreateProjectRequest) del controller y se importa
    }

    public function messages()
    {
        //mensajes personalizados
        return [
            'plate.required' => __('The verification need a plate'),
            'taxinumber.required' => __('The verification need a taxi numbre'),
        ];
    }
}
