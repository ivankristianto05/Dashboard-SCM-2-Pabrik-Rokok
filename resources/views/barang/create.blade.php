@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data barang</h3>
        <form action="/barang" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori Barang">
            </div>
            <div class="form-group">
                <label for="id_bahan" class="form-label">nama bahan</label>
                <select class="form-control select2" style="width: 100%;" name="id_bahan" id="id_bahan">
                    <option disabled value>Pilih Nama Bahan</option>
                    @foreach ($bahan_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bahan }}></option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection