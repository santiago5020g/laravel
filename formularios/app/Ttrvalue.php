<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ttrvalue extends Model
{
    protected $table = 'ttrvalues';
    protected $primaryKey = 'idttrvalues';
    public $timestamps = false;



    public function field()
    {
        return $this->belongsTo('App\Ttrfield','idttrfieldsf');
    }


}
