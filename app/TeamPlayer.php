<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamPlayer extends Model
{
    protected $fillable = ['id', 'team_id', 'player_id', 'goals', 'assists', 'games'];

    public function player()
    {
        return $this->belongsTo('\App\Player', 'player_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo('\App\Team', 'team_id', 'id');
    }
}
