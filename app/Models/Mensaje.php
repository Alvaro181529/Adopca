<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $men_text
 * @property $id_perfiles
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfile $perfile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    
    static $rules = [
		'men_text' => 'required',
		'id_perfiles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['men_text','id_perfiles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfile()
    {
        return $this->hasOne('App\Models\Perfile', 'id', 'id_perfiles');
    }
    

}
