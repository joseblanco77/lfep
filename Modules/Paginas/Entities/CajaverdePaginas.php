<?php

namespace Modules\Paginas\Entities;

use Carbon\Carbon;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class CajaverdePaginas extends Model
{
    use NodeTrait;

    protected $fillable = [
        'nombre', 'slug', 'descripcion', 'contenido', 'activa',
        'usuario_id', 'meta_description', 'meta_author',
        '_lft', '_rgt', 'parent_id',
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

    /**
     * Limpia HTML
     *
     * https://gist.github.com/JayWood/348752b568ecd63ae5ce
     * 
     * @param String $value
     * @return void
     */
    public function setContenidoAttribute($value)
    {
        
        preg_match_all('#<([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $value, $result);
        $openedtags = $result[1];
        preg_match_all('#</([a-z]+)>#iU', $value, $result);
        $closedtags = $result[1];
        $len_opened = count($openedtags);
        if (count($closedtags) !== $len_opened) {
            $openedtags = array_reverse($openedtags);
            for ($i=0; $i < $len_opened; $i++) {
                if (!in_array($openedtags[$i], $closedtags)) {
                    $value .= '</'.$openedtags[$i].'>';
                } else {
                    unset($closedtags[array_search($openedtags[$i], $closedtags)]);
                }
            }
        }
        
        $pattern = '/\<script.*\<\/script\>/iU'; //notice the U flag - it is important here
        $this->attributes['contenido'] =  preg_replace($pattern, '', $value);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function getCreatedAtAttribute($value) 
    {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($value) 
    {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function autor()
    {
        return $this->belongsTo(\Modules\Cajaverde\Entities\CajaverdeUser::class, 'usuario_id');
    }

}
