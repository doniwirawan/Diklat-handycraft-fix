<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $produk = DB::table('produk')->get();
        
        return view('beranda',['produk' => $produk ]);
    }




    public function toko()
    {
        $produk = DB::table('produk')->paginate(10);
        return view('toko',['produk' => $produk ]);

    }




    public function kontak()
    {
        return view('kontak');
    }




    public function pesan(Request $request)
    {
        $x= 0;
        DB::table('customer')->insert([
		'alamat_email' => $request->email,
		'pesan_customer' => $request->pesan,
        ]);
        return redirect('/kontak');
    }



    
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $produk = DB::table('produk')
		->where('nama_produk','like',"%".$cari."%")
		->paginate();
        return view('toko',['produk' => $produk ]);

    }
}
