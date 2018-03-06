<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LinkDownload;
use App\Game;

class LinksController extends Controller
{
    public function getDanhSach (){
    	$links = LinkDownload::with('Game')->orderBy('id', 'DESC')->get();
    	return view('admin.pages.link-download.danhsach', compact('links'));
    }

    public function getThem () {
    	$games = Game::all();
    	return view('admin.pages.link-download.them', compact('games'));
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'TenLink' => 'required|unique:link_download,note',
			'MoTa' => 'required|unique:link_download,link',
			'TrangThai' => 'required'
    	],
    	[
    		'TenLink.required' => 'Tên link không được để trống',
    		'TenLink.unique' => 'Tên link đã tồn tại trong cơ sở dữ liệu',
    		'MoTa.required' => 'Mô tả không được để trống',
    		'MoTa.unique' => 'Mô tả đã tồn tại trong cơ sở dữ liệu',
    		'TrangThai.required' => 'Trạng thái không được để trống',
    	]);

    	$link = new LinkDownload;
    	$link->game_id = $request->TheLoai;
    	$link->note = $request->TenLink;
    	$link->link = $request->MoTa;
    	$link->status = $request->TrangThai;

    	$link->save();

    	return redirect()->route('DanhSachLink')->with('success', 'Thêm link thành công');
    }

    public function getXoa($id){
    	$link = LinkDownload::find($id);
    	$link->delete();
    	return redirect()->route('DanhSachLink')->with('success', 'Xoá link thành công');
    }

    public function getSua($id){
    	$links = LinkDownload::find($id);
    	$games = Game::all();
    	return view('admin.pages.link-download.sua', compact('games', 'links'));
    }

    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'TenLink' => 'required',
			'MoTa' => 'required',
			'TrangThai' => 'required'
    	],
    	[
    		'TenLink.required' => 'Tên link không được để trống',
    		'MoTa.required' => 'Mô tả không được để trống',
    		'TrangThai.required' => 'Trạng thái không được để trống',
    	]);

    	$link = LinkDownload::find($id);
    	$link->game_id = $request->TheLoai;
    	$link->note = $request->TenLink;
    	$link->link = $request->MoTa;
    	$link->status = $request->TrangThai;

    	$link->save();

    	return redirect()->route('DanhSachLink')->with('success', 'Sửa link thành công');

    }

}
