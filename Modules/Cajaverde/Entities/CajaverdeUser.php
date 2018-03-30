<?php

namespace Modules\Cajaverde\Entities;

use Carbon\Carbon;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Cajaverde\Notifications\AdminResetPasswordNotification;

class CajaverdeUser extends Authenticatable
{
    use HasRoles;
    
    use Notifiable;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'logged_at'
    ];    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email', 'password',
        'avatar', 'descripcion', 'activo', 'logged_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getLoggedAtAttribute($value) {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    /**
     * Hash the password given
     *
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    //Send password reset notification
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }    

    public function paginas()
    {
        return $this->hasMany(\Modules\Paginas\Entities\CajaverdePaginas::class, 'usuario_id', 'id');
    }
    
}
