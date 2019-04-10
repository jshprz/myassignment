<?php

namespace App\Myassignment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coach extends Authenticatable
{
    protected $table = 'coach';

    protected $fillable = [
       'name', 'username', 'password', 'status'
    ];
    
    public function team()
    {
        return $this->belongsTo('App\Myassignment\Models\Team');
    }
}
