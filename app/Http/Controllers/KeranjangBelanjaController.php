<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table keranjangbelanja
		// $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // membuat pagination
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); // jumlah araay per halaman , default 15
    	// mengirim data keranjangbelanja ke view index
    	return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

    }
    // method untuk menampilkan view form tambah keranjangbelanja
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkeranjangbelanja');

	}
    // method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// Debug untuk melihat data yang dikirim
		// dd($request->all()); // Uncomment untuk debug

		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
		    'KodeBarang' => $request->KodeBarang,
		    'Jumlah' => $request->Jumlah,
		    'Harga' => $request->Harga,
		]);

		// alihkan halaman ke halaman keranjangbelanja dengan pesan sukses
		return redirect('/keranjangbelanja')->with('success', 'Data keranjangbelanja berhasil ditambahkan!');

	}
	// method untuk hapus data keranjangbelanja
	public function hapus($ID)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja')->with('success', 'Data keranjangbelanja berhasil dihapus!');
	}
}
