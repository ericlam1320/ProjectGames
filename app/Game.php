<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    public $timestamps = false;

    public function GameComment(){
    	return $this->hasMany('App\GameComment', 'game_id', 'id');
    }
    public function GameGenre(){
    	return $this->belongsTo('App\GameGenre', 'genre_id', 'id');
    }
    public function GamePicture(){
    	return $this->hasMany('App\GamePicture', 'game_id', 'id');
    }
    public function LinkDownload(){
    	return $this->hasMany('App\LinkDownload', 'game_id', 'id');
    }
}
