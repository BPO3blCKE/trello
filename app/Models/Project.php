<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class); // (User::class)
    }

    public function boards()
    {
        return $this->hasMany(Board::class); //(Board::class)
    }

}
