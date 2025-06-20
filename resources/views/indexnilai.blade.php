@extends('template')

@section('content')

    <h3>Data Nilai</h3>
    <br>

	<table class = "table table-striped">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
        @php
            // Menghitung nilai huruf berdasarkan nilai angka
            if ($n->nilaiangka <= 40) {
                $nilaihuruf = 'D';
            } elseif ($n->nilaiangka <= 60) {
                $nilaihuruf = 'C';
            } elseif ($n->nilaiangka <= 80) {
                $nilaihuruf = 'B';
            } else {
                $nilaihuruf = 'A';
            }
            $bobot = $n->nilaiangka * $n->sks;
        @endphp
		<tr>
            <td>{{ $n->id }}</td>
			<td>{{ $n->normorinduksiswa }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
            <td>{{ $nilaihuruf }}</td>
            <td>{{ $bobot }}</td>
		</tr>
		@endforeach
	</table>

    <a href="/eas/tambah" class="btn btn-primary">Tambah Data +</a>
    <br>
    <br>
{{-- pagination     --}}
{{ $nilai->links() }}
@endsection
