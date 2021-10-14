<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;


    // RELACIÓN DE UNO A MUCHOS
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
