<?php

namespace Corp\Policies;

use Corp\User;
use Corp\Owner;
use Illuminate\Auth\Access\HandlesAuthorization;

class OwnerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the owner.
     *
     * @param  \Corp\User  $user
     * @param  \Corp\Owner  $owner
     * @return mixed
     */
    public function view(User $user, Owner $owner)
    {
        //
    }

    /**
     * Determine whether the user can create owners.
     *
     * @param  \Corp\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the owner.
     *
     * @param  \Corp\User  $user
     * @param  \Corp\Owner  $owner
     * @return mixed
     */
    public function update(User $user, Owner $owner)
    {
        //
    }

    /**
     * Determine whether the user can delete the owner.
     *
     * @param  \Corp\User  $user
     * @param  \Corp\Owner  $owner
     * @return mixed
     */
    public function delete(User $user, Owner $owner)
    {
        //
    }
}
