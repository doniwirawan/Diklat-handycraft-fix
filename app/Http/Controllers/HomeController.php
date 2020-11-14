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

    public function admin()
    {
        return view('admin');
    }





     public function admin_konten()
    {
        // mengambil data dari table pegawai
    	$produk = DB::table('produk')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin_konten',['produk' => $produk]);
        // return view('admin_konten');
    }






     public function admin_komentar()
     
    {

        $customer = DB::table('customer')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin_komentar',['customer' => $customer]);
        // return view('admin_komentar');
    }



    public function toko()
    {
        $produk = DB::table('produk')->paginate(5);
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
        return view('cari',['produk' => $produk ]);

    }

    // method untuk insert data ke table pegawai
        public function store(Request $request)
        {
            // insert data ke table pegawai
            DB::table('produk')->insert([
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'gambar_produk' => $request->gambar_produk
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/admin_konten');
        
        }

        public function hapus($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('customer')->where('id_customer',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/admin_komentar');
        }

        public function hapuss($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('produk')->where('id',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/admin_konten');
        }

        // method untuk edit data pegawai
        public function edit($id)
        {

            // mengambil data pegawai berdasarkan id yang dipilih
            $produk = DB::table('produk')->where('id',$id)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('edit',['produk' => $produk]);
            
        
        }

        // update data pegawai
        public function update(Request $request)
        {
            DB::table('produk')->where('id',$request->id)->update([
                'id' => $request->id,
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'gambar_produk' => $request->gambar_produk,
                'rating_produk' => $request->rating_produk

            ]);

            return redirect('/admin_konten');
        }
}
