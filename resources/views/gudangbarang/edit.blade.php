@extends('layouts.dashboard')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Gudang Barang</h4>
        <form action="/gudangbarang/update/{{$gudangbarang->id}}" method="POST" class=" ">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Nama Baarang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Stock</label>
                <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan Jumlah Stock" value="{{$gudangbarang->jumlah_barang}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection