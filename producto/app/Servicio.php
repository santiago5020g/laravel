<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
       protected $table = 'servicios';
       protected $primaryKey = 'id';
       public $timestamps = false;


    public function pagos()
    {
        return $this->hasMany('App\Pago','idservicio');
    }

}
