<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'sa_landing_benefits';
    protected $primaryKey = 'id_landing_benefits';
    public $timestamps = false;


    public function landing()
    {
        return $this->belongsTo('App\LandingPage','id_landing_page');
    }
}
