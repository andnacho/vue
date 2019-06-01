<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class userPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function before(User $user)
    {

    }

    public function realiza(User $authUser, $id)
    {
      return $authUser->id === $id;
    }

}
