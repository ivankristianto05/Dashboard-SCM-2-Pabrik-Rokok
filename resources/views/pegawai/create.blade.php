@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Pegawai</h3>
        <form action="/pegawai" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Peegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan Pegawai">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection

