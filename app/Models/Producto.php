<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $prod_nombre
 * @property $prod_precio
 * @property $prod_moneda
 * @property $prod_cantidad
 * @property $prod_descripcion
 * @property $id_serperfiles
 * @property $id_categorias
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Servicioperfile $servicioperfile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'prod_nombre' => 'required',
		'prod_precio' => 'required',
		'prod_moneda' => 'required',
		'prod_cantidad' => 'required',
		'prod_descripcion' => 'required',
		'id_serperfiles' => 'required',
		'id_categorias' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prod_nombre','prod_precio','prod_moneda','prod_cantidad','prod_descripcion','id_serperfiles','id_categorias'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categorias');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicioperfile()
    {
        return $this->hasOne('App\Models\Servicioperfile', 'id', 'id_serperfiles');
    }
    

}
