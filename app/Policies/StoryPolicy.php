<?php

namespace App\Policies;

use App\User;
use App\story;
use Illuminate\Auth\Access\HandlesAuthorization;

class StoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\story  $story
     * @return mixed
     */
    public function view(User $user, story $story)
    {
        //
        return $user->id === $story->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\story  $story
     * @return mixed
     */
    public function update(User $user, story $story)
    {
        //
        return $user->id === $story->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\story  $story
     * @return mixed
     */
    public function delete(User $user, story $story)
    {
        //
        return $user->id === $story->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\story  $story
     * @return mixed
     */
    public function restore(User $user, story $story)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\story  $story
     * @return mixed
     */
    public function forceDelete(User $user, story $story)
    {
        //
    }
}
