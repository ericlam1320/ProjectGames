<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GameComment;

class CommentsController extends Controller
{
    public function getDanhSach(){
    	$comments = GameComment::with('Game')->get();
    	return view('admin.pages.game-comment.danhsach', compact('comments'));
    }

    public function getXoa($id){
    	$comments = GameComment::find($id);
    	$comments->delete();
    	return redirect()->back()->with('success', 'Xoá bình luận thành công');
    }
}
