<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Perfile
 *
 * @property $id
 * @property $per_titulo
 * @property $per_descripcion
 * @property $per_telefono
 * @property $per_imagen
 * @property $per_imagenbaner
 * @property $per_ubicacion
 * @property $per_ciudad
 * @property $id_users
 * @property $created_at
 * @property $updated_at
 *
 * @property Mensaje[] $mensajes
 * @property Posteado[] $posteados
 * @property Servicioperfile[] $servicioperfiles
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Perfile extends Model
{
    
    static $rules = [
		'per_titulo' => 'required',
		'per_descripcion' => 'required',
		'per_telefono' => 'required',
		'per_imagen' => 'required',
		'per_imagenbaner' => 'required',
		'per_ubicacion' => 'required',
		'per_ciudad' => 'required',
		'id_users' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['per_titulo','per_descripcion','per_telefono','per_imagen','per_imagenbaner','per_ubicacion','per_ciudad','id_users'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany('App\Models\Mensaje', 'id_perfiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posteados()
    {
        return $this->hasMany('App\Models\Posteado', 'id_perfiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicioperfiles()
    {
        return $this->hasMany('App\Models\Servicioperfile', 'id_perfiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_users');
    }
    

}
