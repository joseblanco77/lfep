<?php

namespace Modules\Contacto\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudEmailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'         => 'required|email',
            'tipo'          => 'required',
            'formulario_id' => 'required|integer',
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
