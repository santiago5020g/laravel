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



    protected $table = 'usuarios';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;


    public function roles()
    {
        return $this->belongsToMany('App\Rol','usuarios_roles','idusuario','idrol');
    }


    public function hasRole(string $roleSlug)
    {


         $roles = $roleSlug;
         $rolesArray = explode(';',$roles);  
         $roles = $this->roles()->whereIn('nombre', $rolesArray)->count() > 0;
         return $roles;

    }


}
