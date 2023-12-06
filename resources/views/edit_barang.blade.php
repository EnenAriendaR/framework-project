@extends('utama')

@section('edit')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Pembelian Barang</h4>
            <p class="card-description">
                UTS Web Framework Toko Enen
            </p>
            <form class="forms-sample" action="{{ url('updateBarang') .'/' .$barang[0] ->id}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="KodeBarang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="{{ $barang[0]->kode_barang }}"
                        placeholder="Masukkan Kode Barang">
                </div>
                <div class="form-group">
                    <label for="NamaBarang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="{{  $barang[0]->nama_barang }}"
                        placeholder="Masukkan Nama Barang">
                </div>
                <div class="form-group">
                    <label for="JenisVarian">Jenis Varian</label>
                    <input type="text" class="form-control" name="jenis_varian" value="{{  $barang[0]->jenis_varian }}"
                        placeholder="Jenis Varian">
                </div>
                <div class="form-group">
                    <label for="Qty">Qty</label>
                    <input type="text" class="form-control" name="qty" value="{{  $barang[0]->qty }}" placeholder="Qty">
                </div>
                <div class="form-group">
                    <label for="HargaJual">Harga Jual</label>
                    <input type="text" class="form-control" name="harga_jual" value="{{  $barang[0]->harga_jual }}"
                        placeholder="Harga Jual">

                </div>
                <div class="form-group">
                    <label for="TotalHarga">Total Harga</label>
                    <input type="text" class="form-control" name="total_harga" value="{{  $barang[0]->total_harga }}"
                        placeholder="Total Harga">

                </div>
                <div class="form-group">
                    <label for="Diskon">Diskon</label>
                    <input type="text" class="form-control" name="diskon" value="{{  $barang[0]->diskon }}"
                        placeholder="Diskon">

                </div>
                <div class="form-group">
                    <label for="HargaSetelahDiskon">Harga Setelah Diskon</label>
                    <input type="text" class="form-control" name="harga_setelah_diskon"
                        value="{{  $barang[0]->harga_setelah_diskon }}" placeholder="Harga Setelah Diskon">

                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection