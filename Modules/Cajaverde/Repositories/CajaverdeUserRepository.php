<?php

namespace Modules\Cajaverde\Repositories;

use Modules\Cajaverde\Entities\CajaverdeUser;
use Modules\Cajaverde\Repositories\CajaverdeRepository;

class CajaverdeUserRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre', 'apellido', 'email', 'password',
        'avatar', 'descripcion', 'activo', 'remember_token',
        'logged_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeUser::class;
    }


    /**
     * Get the value of createRules
     */ 
    public function getCreateRules()
    {
        return [
            'nombre'                => 'required',
            'apellido'              => 'required',
            'email'                 => 'required|email|unique:cajaverde_users,email',
            'password'              => [
                'required',
                'confirmed',
                'regex:' . config('cajaverde.password_regex'),
            ],
            'password_confirmation' => [
                'required',
                'same:password',
            ],
            'activo'                => 'required',
        ];
    }

    /**
     * Get the value of updateRules
     */ 
    public function getUpdateRules($id)
    {
        return [
            'nombre'                => 'required',
            'apellido'              => 'required',
            'email'                 => 'required|email|unique:cajaverde_users,email,' . $id,
            'password'              => [
                'nullable',
                'confirmed',
                'regex:' . config('cajaverde.password_regex'),
            ],
            'password_confirmation' => [
                'nullable',
                'same:password',
            ],
            'activo'                => 'required',
        ];
    }
}

