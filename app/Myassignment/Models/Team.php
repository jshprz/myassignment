<?php

namespace App\Myassignment\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    protected $fillable = [
        'team_name','status','created_at'
    ];

    public function user()
    {
        return $this->hasMany('App\User','team_id');
    }

    public function coach()
    {
        return $this->hasOne('App\Myassignment\Models\Coach', 'team_id');
    }

    public function tournament()
    {
        return $this->hasMany('App\Myassignment\Models\Tournament','team1_id','team2_id');
    }
}
