<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientePago extends Model
{
    protected $table = 'cliente_pagos';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function pagos()
    {
        return $this->hasMany('App\Pago','idcliente');
    }
}
