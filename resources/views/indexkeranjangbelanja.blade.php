@extends('template')
@section('content')
	<h3>Data keranjang belanja</h3>
	<a href="/keranjangbelanja/tambah" class="btn btn-success"> + Beli</a>
    {{-- <p>Cari Data Keranjang Belanja :</p> --}}
	{{-- <form action="/keranjang/cari" method="GET">
		<input type="text" class="form-control mb-3" name="cari" placeholder="Cari Keranjang Belanja ..">
	</form> --}}

	<br/>
	<br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjangbelanja as $k)
                @php
                    $total = $k->Jumlah * $k->Harga;
                @endphp
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KodeBarang }}</td>
                    <td>{{ $k->Jumlah }}</td>
                    <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{ $keranjangbelanja ->links() }}
@endsection
