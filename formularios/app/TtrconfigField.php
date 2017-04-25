<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TtrconfigField extends Model
{
    protected $table = 'ttrconfigfield';
    protected $primaryKey = 'idttrconfigfield';
    public $timestamps = false;



    public function field()
    {
        return $this->belongsTo('App\Ttrfield','idttrfieldsf');
    }

}
