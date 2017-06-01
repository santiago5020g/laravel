<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idcliente';
    public $timestamps = false;


    public function pagos()
    {
        return $this->hasMany('App\Pago', 'idcliente');
    }
}
