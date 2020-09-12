<?php

use Illuminate\Support\Facades\Route;
use App\TheLoai;


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

//Tao Route Group cho model
Route::group(['prefix'=>'admin'],function(){
    //cho model theloai
    Route::group(['prefix'=>'theloai'],function(){
        //lay danh sach
        Route::get('danhsach','TheLoaiController@getDanhSach');
        //sua 
        Route::get('sua','TheLoaiController@getSua');
        //them
        Route::get('them','TheLoaiController@getThem');
        //post them
        Route::post('them','TheLoaiController@postThem');
    });
    //Comment
    Route::group(['prefix'=>'comment'],function(){
        //lay danh sach
        Route::get('danhsach','CommentController@getDanhSach');
        //sua 
        Route::get('sua','CommentController@getSua');
        //them
        Route::get('them','CommentController@getThem');
    });
    //LoaiTin
    Route::group(['prefix'=>'loaitin'],function(){
        //lay danh sach
        Route::get('danhsach','LoaiTinController@getDanhSach');
        //sua 
        Route::get('sua','LoaiTinController@getSua');
        //them
        Route::get('them','LoaiTinController@getThem');
    });
    //Slide
    Route::group(['prefix'=>'slide'],function(){
        //lay danh sach
        Route::get('danhsach','SlideController@getDanhSach');
        //sua 
        Route::get('sua','SlideController@getSua');
        //them
        Route::get('them','SlideController@getThem');
    });
    //TinTuc
    Route::group(['prefix'=>'tintuc'],function(){
        //lay danh sach
        Route::get('danhsach','TinTucController@getDanhSach');
        //sua 
        Route::get('sua','TinTucController@getSua');
        //them
        Route::get('them','TinTucController@getThem');
    });
   //user
   Route::group(['prefix'=>'user'],function(){
    //lay danh sach
    Route::get('danhsach','UserController@getDanhSach');
    //sua 
    Route::get('sua','UserController@getSua');
    //them
    Route::get('them','UserController@getThem');
});

});