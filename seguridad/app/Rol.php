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


    public function usuarios()
    {
        return $this->belongsToMany('App\User','usuarios_roles','idusuario','idrol');
    }

    

    public function hasAccess(array $permissions) : bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permission) : bool
    {
        return $this->permissions[$permission] ?? false;
    }

}
