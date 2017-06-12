<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'sa_landing_configs';
    protected $primaryKey = 'id_landing_config';
    public $timestamps = false;

    
    public function landing()
    {
        return $this->belongsTo('App\LandingPage','id_landing_page');
    }
}
