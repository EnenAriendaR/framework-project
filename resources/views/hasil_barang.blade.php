@extends('utama')

@section('hasil_barang')
<div class="container mt-5 mb-5" align=center>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h1>Hasil Input Barang</h1>
                    <p>Kode Barang: {{ $kode_barang }}</p>
                    <p>Nama Barang: {{ $nama_barang }}</p>
                    <p>Jenis Varian: {{ $jenis_varian }}</p>
                    <p>Qty: {{ $qty }}</p>
                    <p>Harga Jual: Rp. {{ $harga_jual }}</p>
                    <p>Total Harga: Rp. {{ $total_harga }}</p>
                    <p>Potongan Harga:  {{ $diskon }}%</p>
                    <p>Harga Setelah Diskon: Rp. {{ $harga_setelah_diskon }}</p>
</div>
@endsection