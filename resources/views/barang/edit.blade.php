@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-left">
        <h4>Silahkan Edit Data Barang</h4>
        <form action="/barang/update/{{$barang->id}}" method="POST" class=" ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" value="{{$barang->nama_barang}}">
                <br>
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Kategori Barang" value="{{$barang->kategori}}">
            </div>
            <div class="form-group">
                <label for="id_bahan" class="form-label">Nama Bahan</label>
                <select class="form-control select2" style="width: 100%;" name="id_bahan" id="id_bahan">
                    <option disabled value>Pilih Nama Bahan</option>
                    @foreach ($bahan_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bahan }}></option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection