<?php

namespace Modules\Cajaverde\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Cajaverde\Repositories\CajaverdeUserRepository;

class UsuariosUpdateRequest extends FormRequest
{
    protected $cajaverdeUserRepository;

    public function __construct(CajaverdeUserRepository $cajaverdeUserRepository)
    {
        $this->cajaverdeUserRepository = $cajaverdeUserRepository;
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->cajaverdeUserRepository->getUpdateRules($this->id);
    }

}
