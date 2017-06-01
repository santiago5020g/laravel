<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPago extends Model
{
    protected $table = 'estado_pagos';
    protected $primaryKey = 'idestado';
    public $timestamps = false;


    public function pagos()
    {
        return $this->hasMany('App\Pago', 'idestado');
    }
}
