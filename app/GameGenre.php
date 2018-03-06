<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameGenre extends Model
{
    protected $table = 'game_genres';
    public $timestamps = false;

    public function Game(){
    	return $this->hasMany('App\Game', 'genre_id', 'id');
    }
}
