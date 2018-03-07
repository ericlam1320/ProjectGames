<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Functions;


class NewsController extends Controller
{
    public function getDanhSach(){
    	$news = News::all();
    	return view('admin.pages.news.danhsach', compact('news'));
    }

    public function getThem(){return view('admin.pages.news.them');}

    public function postThem(Request $request){
    	$this->validate($request,[
    		'TieuDe' => 'required|unique:news,title',
    		'TomTat' => 'required',
    		'NoiDung' => 'required',    
    		'HinhTin' => 'required|image',
    		'LuotXem' => 'required|numeric',   
    	],
    	[
    		'TieuDe.required' => 'Tiêu đề không được để trống',
    		'TieuDe.unique' => 'Tiêu đề đã tồn tại trong cơ sở dữ liệu',
    		'TomTat.required' => 'Tóm tắt không được để trống',
    		'NoiDung.required' => 'Nội dung không được để trống',
    		'HinhTin.required' => 'Hình ảnh không được để trống',
    		'HinhTin.image' =>'Hình ảnh bạn vừa chọn không đúng định dạng',
    		'LuotXem.required' => 'Lượt xem không được để trống',
    		'LuotXem.numeric' => 'Lượt xem phải là ký tự số'
    	]);

    	$f = new Functions;

    	$news = new News;
    	$news->title = $request->TieuDe;
    	$news->url = $f->changeTitle($request->TieuDe);
    	$news->description = $request->TomTat;
    	$news->content = $request->NoiDung;
    	$news->view = $request->LuotXem;
    	$news->update_at = $request->NgayDang;
    	if($request->hasFile('HinhTin')){
    		$image = $request->file('HinhTin');
    		$image->move('adminAssets/img/photos/', time().$image->getClientOriginalName());
    		$news->image = time().$image->getClientOriginalName();
    	}
    	else{
    		$news->image = '';
    	}

    	$news->save();
    	return redirect()->route('DanhSachTinTuc')->with('success','Thêm tin tức thành công.');
    }

    public function getXoa($id){
    	$news = News::find($id);
    	$news->delete();
    	return redirect()->route('DanhSachTinTuc')->with('success', 'Xoá tin tức thành công');
    }

    public function getSua($id){
        $news = News::find($id);
        return view('admin.pages.news.sua', compact('news'));
    }

    public function postSua($id, Request $request){
        $this->validate($request,[
            'TieuDe' => 'required',
            'TomTat' => 'required',
            'NoiDung' => 'required',    
            'HinhTin' => 'image',
            'LuotXem' => 'required|numeric',   
        ],
        [
            'TieuDe.required' => 'Tiêu đề không được để trống',
            'TomTat.required' => 'Tóm tắt không được để trống',
            'NoiDung.required' => 'Nội dung không được để trống',
            'HinhTin.image' =>'Hình ảnh bạn vừa chọn không đúng định dạng',
            'LuotXem.required' => 'Lượt xem không được để trống',
            'LuotXem.numeric' => 'Lượt xem phải là ký tự số'
        ]);

        $f = new Functions;

        $news = News::find($id);
        $news->title = $request->TieuDe;
        $news->url = $f->changeTitle($request->TieuDe);
        $news->description = $request->TomTat;
        $news->content = $request->NoiDung;
        $news->view = $request->LuotXem;
        $news->update_at = $request->NgayDang;
        if($request->hasFile('HinhTin')){
            $image = $request->file('HinhTin');
            $image->move('adminAssets/img/photos/', time().$image->getClientOriginalName());
            $news->image = time().$image->getClientOriginalName();
        }
        else{
            $news->image = '';
        }

        $news->save();
        return redirect()->route('DanhSachTinTuc')->with('success','Sửa tin tức thành công.');
    }
}
