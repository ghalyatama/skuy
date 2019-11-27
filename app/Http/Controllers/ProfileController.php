<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;



class ProfileController extends Controller
{
    public function index(){
    	
    	return view('profile');
    }

    //untuk menampilkan investor di page edit
    public function showperid()
    {   
        $users = Auth::user();
        return view('editprofileinvestor', compact('users'));
        
    }

    public function tampilaninvestor(Request $request, $id)
    {   
        $nama = \App\Booking::find($id);
        $datas = DB::table('users')->where('name', $nama['nama_investor'])->first();
        //dd($datas);
        return view('investor', compact('datas'));
        
    }

    public function tampilandeveloper(Request $request, $id)
    {   
        $nama = \App\Ide::find($id);
        $datas = DB::table('users')->where('name', $nama['nama_user'])->first();
        //dd($datas);
        return view('profiledeveloper', compact('datas'));
        
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

        public function updateinvestor(Request $request)
        {
            $users = Auth::user();
            $users->company_name = $request->get('company_name');
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
            return redirect('/profileinvestor')->with('alert-success','Data berhasil diubah!');
        }
}