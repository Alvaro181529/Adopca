<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $ser_nombre
 * @property $pos_descripcion
 * @property $id_tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicioperfile[] $servicioperfiles
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'ser_nombre' => 'required',
		'pos_descripcion' => 'required',
		'id_tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ser_nombre','pos_descripcion','id_tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicioperfiles()
    {
        return $this->hasMany('App\Models\Servicioperfile', 'id_servicio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'id_tipo');
    }
    

}
