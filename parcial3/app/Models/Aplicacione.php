<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aplicacione
 *
 * @property $id
 * @property $persona_id
 * @property $marca_id
 * @property $dosis_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Dosi $dosi
 * @property Marca $marca
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aplicacione extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'marca_id' => 'required',
		'dosis_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','marca_id','dosis_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dosi()
    {
        return $this->hasOne('App\Models\Dosi', 'id', 'dosis_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    

}
