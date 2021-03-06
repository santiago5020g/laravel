<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $table = 'smbd_etl_extract';
    protected $primaryKey = 'cedula';
    public $timestamps = false;



    public function cargos()
    {
        return $this->belongsToMany('App\Cargo','smbd_etl_extract_ttrcargo','cedula','idttrcargo');
    }



    public function formularios()
    {
        return $this->hasManyThrough(
            'App\ttrform_ttrcargo', 'App\smbd_etl_extract_ttrcargo',
            'cedula', 'idttrcargo', 'cedula'
        );
    }


}
