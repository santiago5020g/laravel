<?php

namespace App\Policies;

use App\User;
use App\Rol;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    protected $roles = [Group::ADMIN_CODE, Group::SUPER_ADMIN_CODE];

    /**
     * Determine if the given user can manage others.
     *
     * @param  User $user
     * @return bool
     */
    public function manage(User $user)
    {
        return $user->inRole($this->roles);
    }
    
}
