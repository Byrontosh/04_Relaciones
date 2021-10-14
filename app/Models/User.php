<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // RELACIÓN DE UNO A MUCHOS
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // RELACIÓN DE UNO A MUCHOS
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    // RELACIÓN DE UNO A MUCHOS
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // RELACIÓN DE MUCHOS A MUCHOS 
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }


    // RELACIÓN POLIMÓRFICA DE UNO A UNO
    public function image()
    {
        return $this->MorphOne(Image::class, 'imageable');
    }

    // RELACIÓN DE UNO A MUCHOS
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // CONSULTA  A TRAVÉS DE 
    public function location()
    {
        return $this->hasOneThrough(Location::class, Profile::class);
    }
}
