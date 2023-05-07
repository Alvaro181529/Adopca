<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clasificado
 *
 * @property $id
 * @property $cla_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Posteado[] $posteados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clasificado extends Model
{
    
    static $rules = [
		'cla_nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cla_nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posteados()
    {
        return $this->hasMany('App\Models\Posteado', 'id_clasificados', 'id');
    }
    

}
