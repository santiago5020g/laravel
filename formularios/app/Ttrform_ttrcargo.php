<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ttrform_ttrcargo extends Model
{
    protected $table = 'ttrform_ttrcargo';
    protected $primaryKey = 'idttrcargo';
    public $timestamps = false;


    /*
    public function formularios()
    {
        return $this->belongsToMany('App\Ttrform','ttrform_ttrcargo','idttrcargo','idttrform');
    }
    */

}