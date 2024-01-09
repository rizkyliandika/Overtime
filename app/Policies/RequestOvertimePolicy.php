<?php

namespace App\Policies;

use App\Models\RequestOvertime;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RequestOvertimePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(["administrator", "tenant"]);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RequestOvertime $requestOvertime): bool
    {
        return $user->hasAnyRole(["administrator", "tenant"]);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(["administrator", "tenant"]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RequestOvertime $requestOvertime): bool
    {
        return $user->hasAnyRole(["administrator", "tenant"]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RequestOvertime $requestOvertime): bool
    {
        return $user->hasAnyRole(["administrator", "tenant"]);
    }
}
