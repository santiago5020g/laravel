<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    
    public function manageUsuarios($user)
    {
    	return $user->hasRole('admin');
    }

}
