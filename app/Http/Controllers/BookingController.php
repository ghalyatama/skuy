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
        $tambah->developer_id = $develope['user_id'];
        $tambah->investor_id = $invest['id'];
        $tambah->nama_ide = $develope['nama'];
        $tambah->nama_developer = $develope['nama_user'];
        $tambah->nama_investor = $invest['name'];
        $tambah->save();
        return redirect()->to('/');
        
        
    }

    public function show()
    {   
        $tampil = Auth::user();
        $datas = DB::table('bookings')->where('developer_id', $tampil['id'])->where('status', null)->get();
        $dataa = DB::table('bookings')->where('developer_id', $tampil['id'])->where('status','accept')->get();
        return view('bookinglist', compact('datas', 'dataa'));
        
    }

    public function accept(Request $request, $id)
    {   
        $idea = \App\Booking::find($id);
        $idea->status = 'accept';
        $idea->save();
        return redirect()->to('/bookinglist');
        
    }

    public function ignore($id)
    {   
        $hapus = \App\Booking::find($id);
        $hapus->delete();
        return redirect('bookinglist')->with('success','Data buku telah di hapus');
            
    }
}