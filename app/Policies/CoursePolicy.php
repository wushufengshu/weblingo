<?php

namespace App\Policies;

use App\Admin;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the course.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function view(Admin $admin, Course $course)
    {
        return $course->name == $admin->admin_at;
    }
}
