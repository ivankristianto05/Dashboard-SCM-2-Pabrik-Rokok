@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Outlet</h4>
        <form action="/outlet/update/{{$outlet->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukkan Nama Outlet" value="{{$outlet->nama_outlet}}">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi Outlet" value="{{$outlet->lokasi}}">
                <label for="jumlah_stock" class="form-label">Jumlah Stock</label>
                <input type="text" class="form-control" id="jumlah_stock" name="jumlah_stock" placeholder="Masukkan Jumlah Stock" value="{{$outlet->jumlah_stock}}">
                <label for="batas_stock" class="form-label">Batas Stock</label>
                <input type="text" class="form-control" id="batas_stock" name="batas_stock" placeholder="Masukkan Batas Stock" value="{{$outlet->batas_stock}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection