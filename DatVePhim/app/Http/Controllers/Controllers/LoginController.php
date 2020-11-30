<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
Session_start();

class LoginController extends Controller
{
    // public function auth(){
    //     $admin_id=Auth::id(); //bai 26

    //     if($admin_id){
    //         return redirect('dashboard');
    //     }else{
    //         return redirect('admin');
    //     }
    // }
    public function Login(Request $request){
       
        // $admin_email= $request->admin_email;
        // $admin_password= md5($request->admin_password);

        // $resuft= DB::table('Admin')
        // ->where('admin_email', $admin_email)
        // ->where('admin_pass', $admin_password)
        // ->first();
        // if ($resuft){
        //     Session::put('admin_name',$resuft->admin_name);
        //     Session::put('admin_id',$resuft->admin_id);
        //    return view('/Login');
        //  }else{
        //      Session::put('massage','nhap sai');
             return view('/Login');
        //}
    }
    // public function search(Request $request){
    //     $search=$request->search;
    //     $category=DB::table('tbl_category_product')->where->get();
    //     $brand=DB::table('tbl_brand_product')->get();
    //     $product=DB::table('tbl_product');
    //     return view('admin_layout');
    // }
    
    // public function admin_logout(){
      
    //     Session::put('admin_name',null);
    //     Session::put('admin_id',null);
    //     return redirect('/admin');
    //}
}
