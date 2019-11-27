<?php

namespace App\Http\Controllers;

use App\User;
use App\Ide;
use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;



class BookingController extends Controller
{ 

    //untuk menampilkan ide di page dashboard tiap developer
    public function booking(Request $request, $id)
    {   
        $invest = Auth::user();
        $develope = \App\Ide::find($id);
        $tambah = new Booking();
        $tambah->develope_id = $id;
        $tambah->invest_id = $invest['id'];
        $tambah->nama_ide = $develope['nama_ide'];
        $tambah->save();
        return redirect()->to('/profileinvestor');
        
        
    }

    //untuk menampilkan ide per ide di edit ide
    public function showperid(Request $request, $id)
    {   
        $tampils = DB::table('ides')->where('id', $id)->first();
        return view('editide', compact('tampils'));
        
    }
}