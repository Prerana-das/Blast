<?php

namespace App\Http\Controllers;

use App\User;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
     public function index()
    {
    
    	$user = User::all();
        $table =Gallery::orderBy('id','ASC')->get();
    	return view('user.user')->with(['user'=>$user,'table'=>$table,]);
    }


}
