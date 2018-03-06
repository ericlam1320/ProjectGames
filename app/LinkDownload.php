<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkDownload extends Model
{
    protected $table = 'link_download';
    public $timestamps = false;

    public function Game(){
    	return $this->belongsTo('App\Game', 'game_id', 'id');
    }
}
