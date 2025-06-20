@extends('template')

@section('content')
	<h3>Tambah Nilai</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Nomor Induk Siswa
            </div>
            <div class="col-4">
                <input type="text" name="normorinduksiswa" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Nilai Angka
            </div>
            <div class="col-4">
                <input type="text" name="nilaiangka" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                SKS
            </div>
            <div class="col-4">
                <input type="text" name="sks" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="SIMPAN" class="btn btn-success">
	</form>

@endsection

