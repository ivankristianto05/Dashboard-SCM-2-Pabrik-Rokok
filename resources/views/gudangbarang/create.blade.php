@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Gudang Barang</h3>
        <form action="/gudangbarang" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="id_barang" class="form-label">nama barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Nama Barang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Stock</label>
                <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Masukan Jumlah Stock">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('gudangbarang.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection