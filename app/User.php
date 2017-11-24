<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function balance(){
        return $this->hasOne(Balance::class);
    }
    public function part(){
        return $this->hasOne(Part::class);
    }
    public function spends(){
        return $this->belongsToMany(Spend::class);
    }
    public function trips(){
        return $this->hasOne(Trip::class);
    }
}
