<?php

namespace App\Policies;

use App\Models\User;
use Kenepa\ResourceLock\Models\ResourceLock;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResourceLockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ResourceLock $resourceLock)
    {
        return $user->can('view_');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ResourceLock $resourceLock)
    {
        return $user->can('update_');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ResourceLock $resourceLock)
    {
        return $user->can('delete_');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ResourceLock $resourceLock)
    {
        return $user->can('force_delete_');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ResourceLock $resourceLock)
    {
        return $user->can('restore_');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \Kenepa\ResourceLock\Models\ResourceLock  $resourceLock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, ResourceLock $resourceLock)
    {
        return $user->can('replicate_');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_');
    }

}
