<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
   	protected $table = 'pagos';
    protected $primaryKey = 'idpago';
    public $timestamps = false;


    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'idcliente');
    }


    public function estado()
    {
        return $this->belongsTo('App\EstadoPago', 'idestado');
    }

}
