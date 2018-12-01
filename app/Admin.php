<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $guard = 'admin';

    protected $table = 'admins';

    protected $redirectTo = 'admin/';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password', 'address','admin_at', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function isAdmin()
    {
        return $this->where('admin_at' == 'Super Admin');
    }

    public function addCourse($name,$slug,$description,$image)
    {
        // $this->categories()->create(compact('name','description'));
        Course::create([
            'admin_id' => auth()->id(),
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'image' => $image
        ]);
    }
}
