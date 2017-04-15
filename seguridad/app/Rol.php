<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';
    protected $primaryKey = 'idrol';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
