<?php

namespace Modules\Contacto\Http\Requests;

use Session;
use Illuminate\Foundation\Http\FormRequest;

class CrudCampoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'formulario_id' => 'required|integer',
            'campo_id'      => 'required|integer',
            'nombre'        => 'required|max:255',
            'descripcion'   => 'nullable',
            'valor'         => ($this->tipo==='select') ? 'required|max:255' : 'nullable',
            'required'      => 'required|boolean',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
