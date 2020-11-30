<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
Session_start();


class theloaiController extends Controller
{
   
    public function addtheloai(){
        return view('theloai.addtheloai');
    }

    public function savetheloai(Request $request){
      
        $data['theloai_ten']=$request->theloai_ten;
    

        DB::table('theloai')->insert($data);
        return view('theloai.addtheloai');

    }
    public function alltheloai(){
        $theloai=DB::table('theloai')->get();
        return view('theloai.alltheloai')->with('theloai',$theloai);
    }

    public function edittheloai($id){
        $edit=DB::table('theloai')->where('theloai_id',$id)->get();
        return view('theloai.edittheloai')->with('edit',$edit);
    }

    public function save_edittheloai(Request $request,$id){
        $data=array();
        $data['theloai_ten']=$request->theloai_ten;

        DB::table('theloai')->where('theloai_id',$id)->update($data);
        return redirect('/alltheloai');
    }
    public function deletetheloai($id){
        DB::table('theloai')->where('theloai_id',$id)->delete();
        return redirect('alltheloai');
    }
}
