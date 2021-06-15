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
            'fecha_estudio' => 'required | date',
            'asistencia' => 'nullable | string',
            'fecha_entrega' =>' nullable | date',
            'fecha_proximo_estudio' => 'nullable | date',
            'fecha_revision_estudio' => 'nullable | date',
            'resultado' => 'nullable | mimes:pdf,jpg,png',
        ];
    }
}
