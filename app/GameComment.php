<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameComment extends Model
{
    protected $table = 'game_comments';
    public $timestamps = false;

    public function Game(){
    	return $this->belongsTo('App\Game', 'game_id', 'id');
    }
}
