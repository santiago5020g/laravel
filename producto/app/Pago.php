<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function servicio()
    {
        return $this->belongsTo('App\Servicio','idservicio');
    }


    public function cliente()
    {
        return $this->belongsTo('App\ClientePago','idcliente');
    }

}
