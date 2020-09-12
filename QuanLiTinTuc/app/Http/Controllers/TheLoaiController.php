<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//khai bao model
use App\TheLoai;

class TheLoaiController extends Controller
{
    //get List
    public function getDanhSach(){
        $theloai=TheLoai::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem(){
        return view('admin.theloai.them');
    }

    //method post
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten'=>'required|min:3|max:100'
        ],
        [
            'ten.required'=>'ban chua nhap the loai',
            'ten.min'=>'do dai khong be hon 3 ki tu',
            'ten.max'=>'do dai khong vuot qua 100 ki tu'
        ]
        
    );
    $theloai=new TheLoai();
    $theloai->Ten=$request->ten;
    $theloai->TenKhongDau=changeTitle($request->ten);
    $theloai->save();
    return redirect('admin/theloai/them')->with('thongbao','them thanh cong');
}

    public function getSua(){
        
    }
}
