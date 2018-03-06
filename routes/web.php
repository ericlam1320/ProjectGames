<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){

	Route::get('', 'GamesController@getThongTin')->name('ThongTinAdmin');

    Route::group(['prefix'=>'games'],function(){
    	
    	Route::get('danhsach', 'GamesController@getDanhSach')->name('DanhSachGames');

    	Route::get('them', 'GamesController@getThem')->name('ThemGames');
    	Route::post('them', 'GamesController@postThem');

    	Route::get('xoa/{id}', 'GamesController@getXoa');

    	Route::get('sua/{id}', 'GamesController@getSua');
    	Route::post('sua/{id}', 'GamesController@postSua');
    });

    Route::group(['prefix'=>'genres'], function(){

        Route::get('danhsach', 'GameGenreController@getDanhSach')->name('DanhSachTheLoai');

        Route::get('them', 'GameGenreController@getThem')->name('ThemTheLoai');
        Route::post('them', 'GameGenreController@postThem');

        Route::get('xoa/{id}', 'GameGenreController@getXoa');

        Route::get('sua/{id}', 'GameGenreController@getSua');
        Route::post('sua/{id}', 'GameGenreController@postSua');

    });

    Route::group(['prefix'=>'comments'], function(){

        Route::get('danhsach', 'CommentsController@getDanhSach')->name('DanhSachBinhLuan');

        Route::get('xoa/{id}', 'CommentsController@getXoa');
    });

    
});