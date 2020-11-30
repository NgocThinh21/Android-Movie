<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
Session_start();

class dienvienController extends Controller
{
    public function adddienvien(){
        return view('dienvien.adddienvien');
    }

    public function savedienvien(Request $request){
        $data=array();
        $data['dienvien_ten']=$request->dienvien_ten;
        $data['dienvien_hinhanh']=$request->dienvien_hinhanh;
        $data['dienvien_ngaysinh']=$request->dienvien_ngaysinh;

        $get_image= $request->file('dienvien_hinhanh');

        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            
            $get_image->move('uploads/image',$new_image);
            $data['dienvien_hinhanh']=$new_image;
        }else{
            $data['dienvien_hinhanh']='';
            }
    
        DB::table('dienvien')->insert($data);
        return view('dienvien.adddienvien');

    }
    public function alldienvien(){
        $dienvien=DB::table('dienvien')->get();
        return view('dienvien.alldienvien')->with('dienvien',$dienvien);
    }

    public function editdienvien($id){
        $edit=DB::table('dienvien')->where('dienvien_id',$id)->get();
        return view('dienvien.editdienvien')->with('edit',$edit);
    }

    public function save_editdienvien(Request $request,$id){
        $data=array();
        $data['dienvien_ten']=$request->dienvien_ten;
        $data['dienvien_hinhanh']=$request->dienvien_hinhanh;
        $data['dienvien_ngaysinh']=$request->dienvien_ngaysinh;

        $get_image= $request->file('dienvien_hinhanh');

        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            
            $get_image->move('uploads/image',$new_image);
            $data['dienvien_hinhanh']=$new_image;
        }else{
            $data['dienvien_hinhanh']='';
            }
    
        DB::table('dienvien')->where('dienvien_id',$id)->update($data);
        return redirect('/alldienvien');
    }
    public function deletedienvien($id){
        DB::table('dienvien')->where('dienvien_id',$id)->delete();
        return redirect('alldienvien');
    }
}
