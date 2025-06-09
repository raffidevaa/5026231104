@extends('template')

@section('content')

    <h3>Data Minyak Goreng</h3>

    <a href="/minyakgoreng/tambah" class="btn btn-primary"> + Tambah Minyak Goreng Baru</a>
    <p>Cari Data Pegawai :</p>
	<form action="/minyakgoreng/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Minyak Goreng ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class = "table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($minyakgoreng as $m)
		<tr>
			<td>{{ $m->merkminyakgoreng }}</td>
			<td>{{ $m->hargaminyakgoreng }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>{{ $m->berat }}</td>
			<td>
				<a href="/minyakgoreng/edit/{{ $m->ID }}" class="btn btn-success">Edit</a>

				<a href="/minyakgoreng/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{-- pagination     --}}
{{ $minyakgoreng->links() }}
@endsection
