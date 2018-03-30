<?php

namespace Modules\Paginas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaginasRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255',
            'slug' => 'required|max:255',
            'descripcion' => 'nullable',
            'contenido' => 'nullable',
            'activa' => 'required|boolean',
            'meta_description' => 'nullable|max:255',
            'meta_author' => 'nullable|max:255',
            'parent_id' => 'nullable|integer'
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
