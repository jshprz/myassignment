<?php

namespace App\Myassignment\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournament';

    protected $fillable = [
      'match_type', 'team1_id', 'team2_id'
    ];

    public function team()
    {
        return $this->belongsTo('App\Myassignment\Models\Team');
    }
}
