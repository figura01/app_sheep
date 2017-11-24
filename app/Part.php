<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'user_id',
        'day',
        'started',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
