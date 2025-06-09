@extends('template')

@section('content')
	<h3>Data Minyak Goreng</h3>

	<a href="/minyakgoreng" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/minyakgoreng/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Merk
            </div>
            <div class="col-4">
                <input type="text" name="merkminyakgoreng" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-4">
                <input type="number" name="hargaminyakgoreng" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-4">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input type="number" name="berat" step="0.1" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection

