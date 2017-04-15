<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producto';
    protected $primaryKey = 'idproducto';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public function tienda()
    {
        return $this->belongsTo('App\Tienda','idtienda');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria','producto_categoria','idproducto','idcategoria');
    }


}
