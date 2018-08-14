<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public  function board ()
    {
        return $this->belongsTo(Board::class);
    }
    public  function boardColumn ()
    {
        return $this->belongsTo(BoardColumn::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
