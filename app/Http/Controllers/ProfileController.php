<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;



class ProfileController extends Controller
{
    public function index(){
    	
    	return view('profile');
    }

    public function show(Request $users)
    {   
        $users = Auth::user();
        //dd($users);
        if ($users['status'] =='1'):
            return view('developer', compact('users'));
        else:
            return view('profileinvestor', compact('users'));
        endif;
        }

        public function update(Request $request)
        {
            $users = Auth::user();
            $users->name = $request->get('name');
            $users->kontak = $request->get('kontak');
            $users->email = $request->get('email');
            $users->alamat = $request->get('alamat');
            if($request->file('image') == "")
        {
            $users->image = $users->image;
        } 
        else
        {
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("img/profile/", $fileName);
            $users->image = $fileName;
        }
           // dd($users);
           $users->update();
            return redirect('/developer')->with('alert-success','Data berhasil diubah!');
        }
}