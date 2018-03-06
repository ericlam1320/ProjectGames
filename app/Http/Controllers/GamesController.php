<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GameGenre;
use App\Functions;

class GamesController extends Controller
{
	public function getThongTin(){
		return view('admin.pages.thongtin');
	}

    public function getDanhSach(){
    	$games = Game::with('GameGenre')->orderBy('id', 'DESC')->get();
    	return view('admin.pages.game.danhsach', compact('games'));
    }

    public function getThem(){
    	$genres = GameGenre::all();
    	return view('admin.pages.game.them', compact('genres'));
    }
    public function postThem(Request $request){

    	$this->validate($request,[
    		'TenGame' => 'required|unique:games,title',
    		'TomTat' => 'required',
    		'NoiDung' => 'required',
    		'HinhGame' => 'required|image',
    		'CauHinhToiThieu' => 'required',
    		'CauHinhDeNghi' => 'required',
    		'TrailerGame' => 'required'
    	], 
    	[
    		'TenGame.required'=>'Tên game không được để trống.',
            'TenGame.unique'=>'Tên game đã có trong cơ sở dữ liệu.',
    		'TomTat.required'=>'Bạn cần nhập tóm tắt.',
    		'NoiDung.required'=>'Bạn cần nhập nội dung.',
    		'HinhGame.required'=>'Bạn chưa chọn hình.',
    		'HinhGame.image'=>'Hình bạn vừa chọn không đúng định dạng.',
    		'CauHinhToiThieu.required'=>'Bạn cần nhập cấu hình tối thiểu.',
    		'CauHinhDeNghi.required'=>'Bạn cần nhập cấu hình đề nghị.',
    		'TrailerGame.required'=>'Bạn cần nhập trailer game.'
    	]);

    	$f = new Functions;

    	$game = new Game;
    	$game->genre_id = $request->TheLoai;
    	$game->title = $request->TenGame;
    	$game->url = $f->changeTitle($request->TenGame);
    	$game->description = $request->TomTat;
    	$game->content = $request->NoiDung;
    	$game->minimum = $request->CauHinhToiThieu;
    	$game->recommended = $request->CauHinhDeNghi;
    	$game->trailer = $request->TrailerGame;
    	$game->update_at = $request->NgayCapNhat;
    	$game->year = $request->NamPhatHanh;
    	$game->guide = $request->HuongDan;
    	if($request->hasFile('HinhGame')){
    		$image = $request->file('HinhGame');
    		$image->move('adminAssets/img/hinh_game/', time().$image->getClientOriginalName());
    		$game->image = time().$image->getClientOriginalName();
    	}
    	else{
    		$game->image = '';
    	}

    	$game->save();

    	return redirect()->route('DanhSachGames')->with('success','Thêm game thành công.');
    }

    public function getXoa($id){
    	$game = Game::find($id);
    	$game->delete();
    	return redirect()->route('DanhSachGames')->with('success', 'Xóa game thành công.');
    }

    public function getSua($id){
    	$game = Game::find($id);
    	$genres = GameGenre::all();
    	return view('admin.pages.game.sua', compact('game', 'genres'));
    }
    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'TenGame' => 'required',
    		'TomTat' => 'required',
    		'NoiDung' => 'required',
    		'HinhGame' => 'image',
    		'CauHinhToiThieu' => 'required',
    		'CauHinhDeNghi' => 'required',
    		'TrailerGame' => 'required'
    	], 
    	[
    		'TenGame.required'=>'Tên game không được để trống.',
    		'TomTat.required'=>'Bạn cần nhập tóm tắt.',
    		'NoiDung.required'=>'Bạn cần nhập nội dung.',
    		'HinhGame.image'=>'Hình bạn vừa chọn không đúng định dạng.',
    		'CauHinhToiThieu.required'=>'Bạn cần nhập cấu hình tối thiểu.',
    		'CauHinhDeNghi.required'=>'Bạn cần nhập cấu hình đề nghị.',
    		'TrailerGame.required'=>'Bạn cần nhập trailer game.'
    	]);

    	$f = new Functions;

    	$game = Game::find($id);
    	$game->genre_id = $request->TheLoai;
    	$game->title = $request->TenGame;
    	$game->url = $f->changeTitle($request->TenGame);
    	$game->description = $request->TomTat;
    	$game->content = $request->NoiDung;
    	$game->minimum = $request->CauHinhToiThieu;
    	$game->recommended = $request->CauHinhToiThieu;
    	$game->trailer = $request->TrailerGame;
    	$game->update_at = $request->NgayCapNhat;
    	$game->year = $request->NamPhatHanh;
    	$game->guide = $request->HuongDan;
    	if($request->hasFile('HinhGame')){
    		$image = $request->file('HinhGame');
    		$image->move('adminAssets/img/hinh_game/', time().$image->getClientOriginalName());
    		$game->image = time().$image->getClientOriginalName();
    	}

    	$game->save();

    	return redirect()->route('DanhSachGames')->with('success','Cập nhật game thành công.');
    }
}
