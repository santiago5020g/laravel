<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ttrfield extends Model
{
    protected $table = 'ttrfieldsf';
    protected $primaryKey = 'idttrfieldsf';
    public $timestamps = false;



    public function values()
    {
        return $this->hasMany('App\Ttrvalue');
    }


    public function formulario()
    {
        return $this->belongsTo('App\Ttrform','ttrform_id');
    }



}
