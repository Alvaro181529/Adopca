<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conversacione
 *
 * @property $id
 * @property $id_users
 * @property $id_mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @property Mensaje $mensaje
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conversacione extends Model
{
    
    static $rules = [
		'id_users' => 'required',
		'id_mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_users','id_mensaje'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mensaje()
    {
        return $this->hasOne('App\Models\Mensaje', 'id', 'id_mensaje');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_users');
    }
    

}
