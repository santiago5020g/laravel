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

    /**
     * Checks if User has access to $permissions.
     */
    public function hasAccess(array $permissions) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if the user belongs to role.'
     *
     * @param string roleSlug
     * return boolean
     */
    public function inRole(string $roleSlug)
    {


         $roles = $roleSlug;
         $rolesArray = explode(';',$roles);  
         $roles = $this->roles()->whereIn('nombre', $rolesArray)->count() > 0;
         return $roles;

    }


    public function hasRole($roles)
    {
        if (!is_array($roles)) {
            $roles = [$roles];
        }

        $userGroupCodes = $this->groups->pluck('code');

        return $userGroupCodes->intersect($roles)->count() > 0;
    }

    

}
