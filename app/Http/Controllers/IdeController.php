<?php

namespace App\Http\Controllers;

use App\User;
use App\Ide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;



class IdeController extends Controller
{ 

    //untuk menampilkan ide di page dashboard tiap developer
    public function showperakun()
    {   
        $users = Auth::user();
        $show = DB::table('ides')->where('user_id', $users['id'])->get();
        return view('dashboard', compact('show'));
        
    }

    //untuk menampilkan seluruh ide di page welcome('/')
    public function showall()
    {   
        $tampils = \App\Ide::all();
        return view('welcome', compact('tampils'));
        
    }

    //untuk men-create ide 
    public function store(Request $request)
    {   
        $users = Auth::user();
        $tambah = new Ide();
        $tambah->user_id = $users['id'];
        $tambah->nama = $request['nama'];
        $tambah->Deskripsi = $request['Deskripsi'];
        $tambah->status_id = 1;
        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("img/ide/", $fileName);

        $tambah->image = $fileName;
        $tambah->save();
        return redirect()->to('/dashboard'); 
    }

    //untuk men-update ide
    public function update(Request $request, $id)
    {   
        $edit = \App\Ide::find($id);
        $edit->nama = $request->get('nama');
        $edit->Deskripsi = $request->get('Deskripsi');
        
        if($request->file('image') == "")
        {
            $users->image = $users->image;
        } 
        else
        {
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("img/ide/", $fileName);
            $edit->image = $fileName;
        }
        
        $edit->update();
        return redirect()->to('/dashboard')->with('success', 'Data buku telah diubah');  
    }

    //untuk men-delete ide
    public function hapus()
    {   
        $hapus = \App\Ide::find($id);
        $hapus->delete();
        return redirect('dashboard')->with('success','Data buku telah di hapus');
            
    }
}