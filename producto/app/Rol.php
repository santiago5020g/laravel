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
    protected $primaryKey = 'id';
}
