<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'CODIGO'=>'required|numeric',
            'NOMBRE'=>'required',
            'FECHA_NAC'=>'required',
            'GENERO'=>'required',
            'CI'=>'required',
            'EMAIL'=>'required',
            'TELEFONO'=>'required',
            'DIRECCION'=>'required',
            'FECHA_ING'=>'required',
            'AREA'=>'required',
            'USUARIO'=>'required',
            'CONTRASEÑA'=>'required',
            'NIVEL'=>'required'
        ];
    }
}
