<?php

namespace App;

use App\Models\Board;
use App\Models\Project;
use App\Models\Role;
use App\Models\Task;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    public function boards()
    {
        return $this->belongsToMany(Board::class);
    }
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
