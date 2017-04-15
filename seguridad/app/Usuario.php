<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    use Notifiable;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios';
    protected $primaryKey = 'idusuario';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;




//producto_categoria is the intermedium table, idproducto and idcategoria are primary and foreign key (Producto and Categoria)
    public function roles()
    {
        return $this->belongsToMany('App\Rol','usuarios_roles','idusuario','idrol');
    }


}
