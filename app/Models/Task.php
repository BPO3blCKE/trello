<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public  function board ()
    {
        return $this->belongsTo('App\Models\Board');
    }
    public  function boardColumn ()
    {
        return $this->belongsTo('App\Models\BoardColumn');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
