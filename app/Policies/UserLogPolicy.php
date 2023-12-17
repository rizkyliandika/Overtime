<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserLog;
use Illuminate\Auth\Access\Response;

class UserLogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(["administrator"]);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserLog $userLog): bool
    {
        return $user->hasAnyRole(["administrator"]);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole([]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserLog $userLog): bool
    {
        return $user->hasAnyRole([]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserLog $userLog): bool
    {
        return $user->hasAnyRole([]);
    }
}
