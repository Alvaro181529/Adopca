<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicioperfile
 *
 * @property $id
 * @property $id_perfiles
 * @property $id_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfile $perfile
 * @property Producto[] $productos
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicioperfile extends Model
{
    
    static $rules = [
		'id_perfiles' => 'required',
		'id_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_perfiles','id_servicio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfile()
    {
        return $this->hasOne('App\Models\Perfile', 'id', 'id_perfiles');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_serperfiles', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
    

}
