@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Pegawai</h4>
        <form action="/pegawai/update/{{$pegawai->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama pegawai" value="{{$pegawai->nama_pegawai}}">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan pegawai" value="{{$pegawai->jabatan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection