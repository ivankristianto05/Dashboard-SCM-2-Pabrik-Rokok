@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Produksi</h4>
        <form action="/produksi/update/{{$produksi->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Nama Barang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_alat" class="form-label">Nama Alat</label>
                <select class="form-control select2" style="width: 100%;" name="id_alat" id="id_alat">
                    <option disabled value>Pilih Nama Alat</option>
                    @foreach ($alat_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_alat }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_pegawai" class="form-label">Nama Pegawai</label>
                <select class="form-control select2" style="width: 100%;" name="id_pegawai" id="id_pegawai">
                    <option disabled value>Pilih Nama Pegawai Penanggungjawab</option>
                    @foreach ($pegawai_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_pegawai }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_produksi" class="form-label">Jumlah Produksi</label>
                <input type="text" class="form-control" id="jumlah_produksi" name="jumlah_produksi" placeholder="Masukkan Jumlah Produksi" value="{{$produksi->jumlah_produksi}}">
                <label for="biaya_produksi" class="form-label">Biaya Produksi</label>
                <input type="text" class="form-control" id="biaya_produksi" name="biaya_produksi" placeholder="Masukkan Biaya Produksi" value="{{$produksi->biaya_produksi}}">
                <label for="tanggal" class="form-label">Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Produksi" value="{{$produksi->tanggal}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection