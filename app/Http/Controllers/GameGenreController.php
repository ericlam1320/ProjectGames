<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GameGenre;
use App\Functions;

class GameGenreController extends Controller
{
    public function getDanhSach(){
    	$genres = GameGenre::all();
    	return view('admin.pages.game-genre.danhsach', compact('genres'));
    }

    public function getThem() {return view('admin.pages.game-genre.them');}

    public function postThem(Request $request){
    	$this->validate($request,[
    		'TenTheLoai' => 'required|unique:game_genres,name',
    		'GhiChu' => 'required'
    	],
    	[
    		'TenTheLoai.required' => 'Tên thể loại không được để trống', 
    		'TenTheLoai.unique'	=> 'Tên thể loại đã tồn tại trong cơ sở dữ liệu',
    		'GhiChu.required' => 'Ghi chú không được để trống'
    	]);

    	$f = new Functions;
    	$genres = new GameGenre;
    	$genres->url = $f->changeTitle($request->TenTheLoai);
    	$genres->name = $request->TenTheLoai;
    	$genres->note = $request->GhiChu;
    	$genres->save();

    	return redirect()->route('DanhSachTheLoai')->with('success','Thêm thể loại game thành công.');
    }

    public function getXoa($id){
    	$genres = GameGenre::find($id);
    	$genres->delete();
    	return redirect()->route('DanhSachTheLoai')->with('success', 'Xoá thể loại game thành công');
    }

    public function getSua($id){
    	$genres = GameGenre::find($id);
    	return view('admin.pages.game-genre.sua', compact('genres'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TenTheLoai' => 'required',
    		'GhiChu' => 'required'
    	],
    	[
    		'TenTheLoai.required' => 'Tên thể loại không được để trống', 
    		'GhiChu.required' => 'Ghi chú không được để trống'
    	]);

    	$f = new Functions;
    	$genres = GameGenre::find($id);
    	$genres->url = $f->changeTitle($request->TenTheLoai);
    	$genres->name = $request->TenTheLoai;
    	$genres->note = $request->GhiChu;
    	$genres->save();

    	return redirect()->route('DanhSachTheLoai')->with('success','Cập nhật thể loại game thành công.');
    }
}
