<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    public function boardColumns()
    {
        return $this->hasMany('App\Models\BoardColumn');
    }
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
