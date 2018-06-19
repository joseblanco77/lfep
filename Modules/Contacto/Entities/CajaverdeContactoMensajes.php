<?php

namespace Modules\Contacto\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoMensajes extends Model
{
    protected $fillable = [
        'payload', 'user_agent', 'ip'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getPayloadAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getCreatedAtAttribute($value)
    {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }
}
