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
        return $this->hasMany('App\Ttrfield','ttrform_id');
    }


    public function cargos()
    {
        return $this->belongsToMany('App\Cargo','ttrform_ttrcargo','idttrform','idttrcargo');
    }



    public function formularios_ve_usuario()
    {
        return $this->hasManyThrough(
            'App\ttrform_ttrcargo', 'App\smbd_etl_extract_ttrcargo',
            'cedula', 'idttrcargo', 'cedula'
        );
    }


}
