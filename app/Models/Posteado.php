<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Posteado
 *
 * @property $id
 * @property $pos_img
 * @property $pos_imgtitulo
 * @property $pos_titulo
 * @property $pos_contenido
 * @property $pos_fecha
 * @property $id_perfiles
 * @property $id_clasificados
 * @property $created_at
 * @property $updated_at
 *
 * @property Clasificado $clasificado
 * @property Perfile $perfile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Posteado extends Model
{
    
    static $rules = [
		'pos_img' => 'required',
		'pos_imgtitulo' => 'required',
		'pos_titulo' => 'required',
		'pos_contenido' => 'required',
		'pos_fecha' => 'required',
		'id_perfiles' => 'required',
		'id_clasificados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pos_img','pos_imgtitulo','pos_titulo','pos_contenido','pos_fecha','id_perfiles','id_clasificados'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clasificado()
    {
        return $this->hasOne('App\Models\Clasificado', 'id', 'id_clasificados');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfile()
    {
        return $this->hasOne('App\Models\Perfile', 'id', 'id_perfiles');
    }
    

}
