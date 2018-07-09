<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardColumn extends Model
{
    public  function board ()
    {
        return $this->belongsTo('App\Models\Board');
    }
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
