<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function boardColumns()
    {
        return $this->hasMany(BoardColumn::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
