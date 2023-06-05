@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Perlatan</h4>
        <form action="/peralatan/update/{{$peralatan->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukkan Nama alat" value="{{$peralatan->nama_alat}}">
                <label for="jumlah" class="form-label">Jumlah Alat</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Alat" value="{{$peralatan->jumlah}}">
                <label for="kondisi" class="form-label">Kondisi Alat</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Masukkan Kondisi Alat" value="{{$peralatan->kondisi}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection