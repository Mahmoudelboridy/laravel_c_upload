<?php

namespace App\Http\Controllers;

use App\Models\files;
use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function create(Request $request){
        $validate=$request->validate([
            'file'=>'required|mimes:jpg,png,jpeg|max:1000'
        ]);
        if($validate){
           $file=$request->file('file');
           $extension=$file->getClientOriginalExtension();
           $file_name=time().'.'.$extension;
           $file->move('storage/app/public/pics',$file_name);
            files::create([
            'file'=>$file_name,
            'name'=>$request->name
            ]);
        }
        return redirect()->back();

    }
    public function ard(){
        $ards=files::get();
        return view('ard',compact('ards'));
    }
}