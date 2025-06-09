@extends('template')

@section('content')
	<h3>Edit Minyak Goreng</h3>

	<a href="/minyakgoreng"> Kembali</a>

	<br/>
	<br/>

	@foreach($minyakgoreng as $m)
	<form action="/minyakgoreng/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $m->ID }}"> <br/>
		<div class="row mb-3">
            <div class="col-3">
                Merk
            </div>
            <div class="col-4">
                <input type="text" name="merkminyakgoreng" required="required" value="{{ $m->merkminyakgoreng }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-4">
                <input type="number" name="hargaminyakgoreng" required="required" value="{{ $m->hargaminyakgoreng }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-4">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1" {{ $m->tersedia ? 'checked' : '' }}>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input type="number" name="berat" step="0.1" required="required" value="{{ $m->berat }}">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection

