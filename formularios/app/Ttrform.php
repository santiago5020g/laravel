<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ttrform extends Model
{
    protected $table = 'ttrform';
    protected $primaryKey = 'idttrform';
    public $timestamps = false;



    public function fields()
    {
        return $this->hasMany('App\Ttrfield');
    }


}
