@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Outlet</h3>
        <form action="/outlet" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukan Nama Outlet">
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Outlet</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukan Lokasi Outlet">
            </div>
            <div class="mb-3">
                <label for="jumlah_stock" class="form-label">Jumlah Stock yang Tersedia</label>
                <input type="text" class="form-control" id="jumlah_stock" name="jumlah_stock" placeholder="Masukan Jumlah Stock">
            </div>
            <div class="mb-3">
                <label for="batas_stock" class="form-label">Batas Stock yang Dapat Ditampung</label>
                <input type="text" class="form-control" id="batas_stock" name="batas_stock" placeholder="Masukan Batas Stock">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection