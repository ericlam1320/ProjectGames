<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamePicture extends Model
{
    protected $table = 'game_pictures';
    public $timestamps = false;

    public function Game(){
    	return $this->belongsTo('App\Game', 'game_id', 'id');
    }
}
