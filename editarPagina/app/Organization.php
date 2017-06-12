<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'sa_organizations';
    protected $primaryKey = 'id_organization';
    public $timestamps = false;


    public function landing()
    {
        return $this->hasOne('App\LandingPage','id_organization');
    }

}
