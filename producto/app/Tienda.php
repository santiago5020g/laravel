<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tienda';
    protected $primaryKey = 'idtienda';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


 
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
