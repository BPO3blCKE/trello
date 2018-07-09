<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function boards()
    {
        return $this->hasMany('App\Models\Board');
    }

}
