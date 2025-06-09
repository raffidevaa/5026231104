<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinyakgorengController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();

        //pagination
        $minyakgoreng = DB::table('minyakgoreng')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexmg',['minyakgoreng' => $minyakgoreng]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmg');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('minyakgoreng')->insert([
			'merkminyakgoreng' => $request->merkminyakgoreng,
			'hargaminyakgoreng' => $request->hargaminyakgoreng,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/minyakgoreng');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$minyakgoreng = DB::table('minyakgoreng')->where('ID',$id)->get();
		// passing data minyakgoreng yang didapat ke view edit.blade.php
		return view('editmg',['minyakgoreng' => $minyakgoreng]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('minyakgoreng')->where('ID',$request->ID)->update([
			'merkminyakgoreng' => $request->merkminyakgoreng,
			'hargaminyakgoreng' => $request->hargaminyakgoreng,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/minyakgoreng');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('minyakgoreng')->where('ID',$id)->delete();

		// alihkan halaman ke halaman minyakgoreng
		return redirect('/minyakgoreng');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$minyakgoreng = DB::table('minyakgoreng')
		->where('merkminyakgoreng','like',"%".$cari."%")
		->paginate();

    		// mengirim data minyakgoreng ke view index
		return view('indexmg',['minyakgoreng' => $minyakgoreng, 'cari' => $cari]);

	}
}
