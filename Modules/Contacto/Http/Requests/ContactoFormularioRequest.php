<?php

namespace Modules\Contacto\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Contacto\Repositories\CajaverdeContactoFormulariosRepository;

class ContactoFormularioRequest extends FormRequest
{
    protected $cajaverdeContactoFormulariosRepository;

    public function __construct(CajaverdeContactoFormulariosRepository $cajaverdeContactoFormulariosRepository)
    {
        $this->cajaverdeContactoFormulariosRepository = $cajaverdeContactoFormulariosRepository;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return $this->cajaverdeContactoFormulariosRepository
            ->getContactoMessages($this->slug);
    }

    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->cajaverdeContactoFormulariosRepository
            ->getContactoRules($this->slug);
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
