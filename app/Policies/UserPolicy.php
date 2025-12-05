<?php

namespace App\Policies;

use App\Enums\PermissionEnum;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAnyTechnicians(User $user): bool
    {
        return $user->hasPermissionTo(PermissionEnum::ACCESS_TECHNICIANS->value);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function viewTechnician(User $user, User $model): bool
    {
        return $user->hasPermissionTo(PermissionEnum::VIEW_TECHNICIANS->value);
    }

    /**
     * Determine whether the user can create models.
     */
    public function createTechnician(User $user): bool
    {
        return $user->hasPermissionTo(PermissionEnum::CREATE_TECHNICIANS->value);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function updateTechnician(User $user, User $model): bool
    {
        return $user->hasPermissionTo(PermissionEnum::EDIT_TECHNICIANS->value);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function deleteTechnician(User $user, User $model): bool
    {
        return $user->hasPermissionTo(PermissionEnum::DELETE_TECHNICIANS->value);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}
