<?php

namespace Corp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use Corp\User;
use Corp\Animal;

class AnimalPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function save(User $user) {
		return $user->canDo('ADD_ARTICLES');
	}
	public function save(User $user) {
		return $user->canDo('ADD_ANIMALS');
	}
	public function view(User $user) {
		return $user->canDo('VIEW_ADMIN_ARTICLES');
	}
	public function edit(User $user) {
		return $user->canDo('UPDATE_ARTICLES');
	}
	public function destroy(User $user, Animal $animal) {
		return ($user->canDo('DELETE_ANIMAL')  && $user->id == $animal->user_id);
	}
}
