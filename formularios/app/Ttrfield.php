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


}
