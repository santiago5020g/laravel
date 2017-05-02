<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smbd_etl_extract_ttrcargo extends Model
{
    protected $table = 'smbd_etl_extract_ttrcargo';
    protected $primaryKey = 'idttrcargo';
    public $timestamps = false;


    /*
    public function formularios()
    {
        return $this->belongsToMany('App\Ttrform','ttrform_ttrcargo','idttrcargo','idttrform');
    }
    */

}