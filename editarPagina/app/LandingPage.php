<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
	protected $table = 'sa_landing_pages';
    protected $primaryKey = 'id_landing_page';
    public $timestamps = false;

    
    public function organization()
    {
        return $this->belongsTo('App\Organization','id_organization');
    }


    public function configs()
    {
        return $this->hasMany('App\Config','id_landing_page');
    }


    public function benefits()
    {
        return $this->hasMany('App\Benefit','id_landing_page');
    }


}
