<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
Session_start();


class quocgiaController extends Controller
{
    
    public function addquocgia(){
        return view('quocgia.addquocgia');
    }

    public function savequocgia(Request $request){
      
        $data['quocgia_ten']=$request->quocgia_ten;
    

        DB::table('quocgia')->insert($data);
        return view('quocgia.addquocgia');

    }
    public function allquocgia(){
        $quocgia=DB::table('quocgia')->get();
        return view('quocgia.allquocgia')->with('quocgia',$quocgia);
    }

    public function editquocgia($id){
        $edit=DB::table('quocgia')->where('quocgia_id',$id)->get();
        return view('quocgia.editquocgia')->with('edit',$edit);
    }

    public function save_editquocgia(Request $request,$id){
 
        $data['quocgia_ten']=$request->quocgia_ten;

        DB::table('quocgia')->where('quocgia_id',$id)->update($data);
        return redirect('/allquocgia');
    }
    public function deletequocgia($id){
        DB::table('quocgia')->where('quocgia_id',$id)->delete();
        return redirect('allquocgia');
    }
}
