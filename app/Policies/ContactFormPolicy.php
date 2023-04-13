<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ContactForm;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactFormPolicy
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
        return $user->can('view_any_contact::form');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ContactForm $contactForm)
    {
        return $user->can('view_contact::form');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_contact::form');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ContactForm $contactForm)
    {
        return $user->can('update_contact::form');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ContactForm $contactForm)
    {
        return $user->can('delete_contact::form');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_contact::form');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ContactForm $contactForm)
    {
        return $user->can('force_delete_contact::form');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_contact::form');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ContactForm $contactForm)
    {
        return $user->can('restore_contact::form');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_contact::form');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, ContactForm $contactForm)
    {
        return $user->can('replicate_contact::form');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_contact::form');
    }

}
