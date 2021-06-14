<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudiosPost extends FormRequest
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
            'tipo' => 'required | min:5 | max:500',
            'fecha_estudio' => 'required | min:5 | max:400',
            /**'asistencia'  
            'fecha_entrega'
            'fecha_proximo_estudio'
            'fecha_revision_estudio'
            'resultado' */
        ];
    }
}
