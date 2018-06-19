<?php

namespace Modules\Contacto\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudFormularioRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'      => 'required|max:255',
            'descripcion' => 'nullable',
            'slug'        => 'required|max:255',
            'asunto'      => 'required|max:255',
            'ayuda'       => 'nullable',
            'activo'      => 'required|boolean',
            'accesible'   => 'required|boolean',
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
