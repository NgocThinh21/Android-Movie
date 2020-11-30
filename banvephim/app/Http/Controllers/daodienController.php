<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
Session_start();

class daodienController extends Controller
{
    public function adddaodien(){
        return view('daodien.adddaodien');
    }

    public function savedaodien(Request $request){
        $data=array();
        $data['daodien_ten']=$request->daodien_ten;
        $data['daodien_hinhanh']=$request->daodien_hinhanh;
        $data['daodien_ngaysinh']=$request->daodien_ngaysinh;

        $get_image= $request->file('daodien_hinhanh');

        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            
            $get_image->move('uploads/image',$new_image);
            $data['daodien_hinhanh']=$new_image;
        }else{
            $data['daodien_hinhanh']='';
            }
    
        DB::table('daodien')->insert($data);
        return view('daodien.adddaodien');

    }
    public function alldaodien(){
        $daodien=DB::table('daodien')->get();
        return view('daodien.alldaodien')->with('daodien',$daodien);
    }

    public function editdaodien($id){
        $edit=DB::table('daodien')->where('daodien_id',$id)->get();
        return view('daodien.editdaodien')->with('edit',$edit);
    }

    public function save_editdaodien(Request $request,$id){
        $data=array();
        $data['daodien_ten']=$request->daodien_ten;
        $data['daodien_hinhanh']=$request->daodien_hinhanh;
        $data['daodien_ngaysinh']=$request->daodien_ngaysinh;

        $get_image= $request->file('daodien_hinhanh');

        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            
            $get_image->move('uploads/image',$new_image);
            $data['daodien_hinhanh']=$new_image;
        }else{
            $data['daodien_hinhanh']='';
            }
    
        DB::table('daodien')->where('daodien_id',$id)->update($data);
        return redirect('/alldaodien');
    }
    public function deletedaodien($id){
        DB::table('daodien')->where('daodien_id',$id)->delete();
        return redirect('alldaodien');
    }
}
