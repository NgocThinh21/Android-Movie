<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Session;
Session_start();
use App\phim;
use App\quocgia;
use App\theloai;
use App\nsx;
use App\daodien;
use App\dienvien;

class phimController extends Controller
{

    
    public function admin(){
        return view('Pages.admin');
    }

     
      
        public function addmovie(){
      
            $phim=phim::all();
            $quocgia=quocgia::all();
            $theloai=theloai::all();
            $daodien= DB::table('daodien')->get();
            $dienvien= DB::table('dienvien')->get();
            $nsx= DB::table('nsx')->get();
            return view('Pages.addmovie')->with('phim',$phim)
            ->with('daodien',$daodien)
            ->with('dienvien',$dienvien)
            ->with('nsx',$nsx)
            ->with('quocgia',$quocgia)
            ->with('theloai',$theloai);

        }

        public function savemovie(Request $request){
            $data=array();
            $data['phim_ten']=$request->phim_ten;
            $data['phim_gia']=$request->phim_gia;
            $data['phim_thoiluong']=$request->phim_thoiluong;
            $data['phim_daodien']=$request->phim_daodien;
            $data['phim_dienvien']=$request->phim_dienvien;
            $data['phim_theloai']=$request->phim_theloai;
            $data['phim_quocgia']=$request->phim_quocgia;
            $data['phim_nsx']=$request->phim_nsx;
            $data['phim_hinhanh']=$request->phim_hinhanh;
            $data['phim_trailer']=$request->phim_trailer;
            $data['phim_trangthai']=$request->phim_trangthai;

            $get_image= $request->file('phim_hinhanh');

            if($get_image){
                $get_name_image= $get_image->getClientOriginalName();
                $name_image=current(explode('.',$get_name_image));
                $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                
                $get_image->move('uploads/image',$new_image);
                $data['phim_hinhanh']=$new_image;
            }else{
                $data['phim_hinhanh']='';
                }

            $get_video= $request->file('phim_trailer');
            if($get_video){
                $get_name_image= $get_video->getClientOriginalName();
                $name_image=current(explode('.',$get_name_image));
                $new_image= $name_image.rand(0,99).'.'.$get_video->getClientOriginalExtension();
                
                $get_video->move('uploads/trailer',$new_image);
                $data['phim_trailer']=$new_image;
            }else{
                $data['phim_trailer']='';
            }
        
            DB::table('phim')->insert($data);
            return redirect('/addmovie');

        }
        public function allmovie(){
            $phim=phim::all();
            return view('Pages.allmovie')->with('phim',$phim);
        }
        public function active($id){
            DB::table('phim')->where('phim_id',$id)->update(['phim_trangthai'=>1]);
            return redirect('/allmovie');
        }
        public function unactive($id){
            DB::table('phim')->where('phim_id',$id)->update(['phim_trangthai'=>0]);
            return redirect('/allmovie');
        }


        public function editmovie($id){
            $edit=DB::table('phim')->where('phim_id',$id)->get();
            return view('Pages.editmovie')->with('edit',$edit);
        }

        public function save_editmovie(Request $request,$id){
            $data=array();
       
            


            
            $get_image= $request->file('phim_hinhanh');

            if($get_image){
                $get_name_image= $get_image->getClientOriginalName();
                $name_image=current(explode('.',$get_name_image));
                $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                
                $get_image->move('uploads/image',$new_image);
                $data['phim_hinhanh']=$new_image;
            }else{
                $data['phim_hinhanh']='';
                }

            $get_video= $request->file('phim_trailer');
            if($get_video){
                $get_name_video= $get_video->getClientOriginalName();
                $name_video=current(explode('.',$get_name_video));
                $new_video= $name_video.rand(0,99).'.'.$get_video->getClientOriginalExtension();
                
                $get_video->move('uploads/trailer',$new_video);
                $data['phim_trailer']=$new_video;
            }else{
                $get_name_video= $get_video->getClientOriginalName();
                $name_video=current(explode('.',$get_name_video));
                $new_video= $name_video.rand(0,99).'.'.$get_video->getClientOriginalExtension();
                
                $get_video->move('uploads/trailer',$new_video);
                $data['phim_trailer']=$new_video;
            }
        
            DB::table('phim')->where('phim_id',$id)->update($data);
            return redirect('/allmovie');
        }
        public function deletemovie($id){
            DB::table('phim')->where('phim_id',$id)->delete();
            return redirect('allmovie');
        }
}


         
// $phim= DB::table('phim')
// ->join('dienvien','dienvien.dienvien_id','=','phim.phim_dienvien')
// ->join('daodien','daodien.daodien_id','=','phim.phim_daodien')
// ->join('nsx','nsx.nsx_id','=','phim.phim_nsx')
// ->join('quocgia','quocgia.quocgia_id','=','phim.phim_quocgia')
// ->join('theloai','theloai.theloai_id','=','phim.phim_theloai')->get();