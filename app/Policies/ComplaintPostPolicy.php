<?php

namespace App\Policies;

use App\User;
use App\ComplaintPost;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComplaintPostPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any complaint posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the complaint post.
     *
     * @param  \App\User  $user
     * @param  \App\ComplaintPost  $complaintPost
     * @return mixed
     */
    public function view(User $user, ComplaintPost $complaintPost)
    {
        //
        
    }

    /**
     * Determine whether the user can create complaint posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->is_admin == 1;
    }

    /**
     * Determine whether the user can update the complaint post.
     *
     * @param  \App\User  $user
     * @param  \App\ComplaintPost  $complaintPost
     * @return mixed
     */
    public function update(User $user, ComplaintPost $complaintPost)
    {
        //
   
    }

    /**
     * Determine whether the user can delete the complaint post.
     *
     * @param  \App\User  $user
     * @param  \App\ComplaintPost  $complaintPost
     * @return mixed
     */
    public function delete(User $user, ComplaintPost $complaintPost)
    {
        //
  
    }

    /**
     * Determine whether the user can restore the complaint post.
     *
     * @param  \App\User  $user
     * @param  \App\ComplaintPost  $complaintPost
     * @return mixed
     */
    public function restore(User $user, ComplaintPost $complaintPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the complaint post.
     *
     * @param  \App\User  $user
     * @param  \App\ComplaintPost  $complaintPost
     * @return mixed
     */
    public function forceDelete(User $user, ComplaintPost $complaintPost)
    {
        //
    }
}
