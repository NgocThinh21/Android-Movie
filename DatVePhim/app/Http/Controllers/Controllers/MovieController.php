<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
Session_start();

class MovieController extends Controller
{
    public function admin(){
        return view('admin_layout');
    }
    public function addmovie(){
        return view('Pages.addmovie');
    }


    public function savemovie(Request $request){
        $data=array();
        $data['mv_name']=$request->name;
        $data['mv_daodien']=$request->daodien;
        $data['mv_dienvien']=$request->dienvien;
        $data['mv_theloai']=$request->theloai;
        $data['mv_quocgia']=$request->quocgia;
        $data['mv_nsx']=$request->nsx;
        $data['mv_thoiluong']=$request->thoiluong;
        $data['mv_trangthai']=$request->trangthai;
        $data['mv_trailer']=$request->mv_trailer;
        $data['mv_hinhanh']=$request->mv_hinhanh;

       
        $get_image= $request->file('mv_hinhanh');

        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            
            $get_image->move('uploads/image',$new_image);
            $data['mv_hinhanh']=$new_image;
        }else{
             $data['mv_trailer']='';
            }



        $get_video= $request->file('mv_trailer');
        if($get_video){
            $get_name_image= $get_video->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_video->getClientOriginalExtension();
            
            $get_video->move('uploads/trailer',$new_image);
            $data['mv_trailer']=$new_image;
        }else{
            $data['mv_trailer']='';
        }
       
        DB::table('movie')->insert($data);
        return view('Pages.addmovie');

    }
    public function allmovie(){
        $movie=DB::table('movie')->get();
        return view('Pages.allmovie')->with('movie',$movie);
    }
    public function active($id){
        DB::table('movie')->where('mv_id',$id)->update(['mv_trangthai'=>1]);
        return redirect('/allmovie');
    }
    public function unactive($id){
        DB::table('movie')->where('mv_id',$id)->update(['mv_trangthai'=>0]);
        return redirect('/allmovie');
    }

    
    public function editmovie($id){
        $edit=DB::table('movie')->where('mv_id',$id)->get();
        return view('Pages.editmovie')->with('edit',$edit);
    }

    public function save_editmovie(Request $request,$id){
        $get_image= $request->file('mv_trailer');

            if($get_image){
                echo "co";
            }else{
                echo "khong co";
            }
    }
    public function deletemovie($id){
        DB::table('movie')->where('mv_id',$id)->delete();
        return redirect('allmovie');
    }
   
}

// $data=array();
// $data['mv_name']=$request->name;
// $data['mv_daodien']=$request->daodien;
// $data['mv_dienvien']=$request->dienvien;
// $data['mv_theloai']=$request->theloai;
// $data['mv_quocgia']=$request->quocgia;
// $data['mv_nsx']=$request->nsx;
// $data['mv_thoiluong']=$request->thoiluong;
// $data['mv_trangthai']=$request->trangthai;



// $get_image= $request->file('mv_hinhanh');

// if($get_image){
//     $get_name_image= $get_image->getClientOriginalName();
//     $name_image=current(explode('.',$get_name_image));
//     $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    
//     $get_image->move('uploads/image',$new_image);
//     $data['mv_hinhanh']=$new_image;
// }else{
//      $data['mv_trailer']='';
//     }



// $get_video= $request->file('mv_trailer');
// if($get_video){
//     $get_name_image= $get_video->getClientOriginalName();
//     $name_image=current(explode('.',$get_name_image));
//     $new_image= $name_image.rand(0,99).'.'.$get_video->getClientOriginalExtension();
    
//     $get_video->move('uploads/trailer',$new_image);
//     $data['mv_trailer']=$new_image;
// }else{
//     $data['mv_trailer']='';
// }

// DB::table('movie')->update($data);
// return redirect('allmovie');