<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded =[];
    
    use HasFactory;

    // RELACIÓN DE UNO A UNO
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
