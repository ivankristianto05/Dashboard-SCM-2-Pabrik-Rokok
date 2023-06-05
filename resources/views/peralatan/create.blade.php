@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Peralatan</h3>
        <form action="/peralatan" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama alat</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukan Nama Peralatan">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">jumlah alat</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Alat">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi Alat</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Masukan kondisi Alat">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('peralatan.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection

