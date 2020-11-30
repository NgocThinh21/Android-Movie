<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
Session_start();
class nsxController extends Controller
{
    public function addnsx(){
        return view('nsx.addnsx');
    }

    public function savensx(Request $request){
      
        $data['nsx_ten']=$request->nsx_ten;
    

        DB::table('nsx')->insert($data);
        return view('nsx.addnsx');

    }
    public function allnsx(){
        $nsx=DB::table('nsx')->get();
        return view('nsx.allnsx')->with('nsx',$nsx);
    }

    public function editnsx($id){
        $edit=DB::table('nsx')->where('nsx_id',$id)->get();
        return view('nsx.editnsx')->with('edit',$edit);
    }

    public function save_editnsx(Request $request,$id){
 
        $data['nsx_ten']=$request->nsx_ten;

        DB::table('nsx')->where('nsx_id',$id)->update($data);
        return redirect('/allnsx');
    }
    public function deletensx($id){
        DB::table('nsx')->where('nsx_id',$id)->delete();
        return redirect('allnsx');
    }
}
