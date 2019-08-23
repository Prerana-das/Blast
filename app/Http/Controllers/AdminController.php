<?php

namespace App\Http\Controllers;

use App\User;
use App\Gallery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
     public function index()
    {
    
    	$user = User::all();
        $table =Gallery::orderBy('id','ASC')->get();
    	return view('admin.admin')->with(['user'=>$user,'table'=>$table,]);
    }


     public function save(Request $request){
        $table = new Gallery();
        $table->img_title = $request->img_title;

         if ($request->hasFile('image')) {

            $extension = $request->image->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->image = $filename;

            $request->image->move('public/uploads',$filename);
        }

        $table->save();
        // return redirect()->to('admin/admin');
        
        return redirect()->back();
    }
}
