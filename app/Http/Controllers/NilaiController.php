<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
	{
    	// mengambil data dari table nilai
		// $nilai = DB::table('nilai')->get();

        //pagination
        $nilai = DB::table('nilai')->paginate(10);

    	// mengirim data nilai ke view index
		return view('indexnilai',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah nilai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke table nilai
	public function store(Request $request)
	{
		// insert data ke table nilai
		DB::table('nilai')->insert([
            'normorinduksiswa' => $request->normorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks,
		]);
		// alihkan halaman ke halaman nilai
		return redirect('/eas');

	}

	// method untuk hapus data nilai
	// public function hapus($id)
	// {
	// 	DB::table('nilai')->where('kodepegawai',$id)->delete();

	// 	return redirect('/nilai');
	// }
}
