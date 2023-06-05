@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Produksi</h3>
        <form action="/produksi" method="POST" class="">
            @csrf
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
                <label for="id_alat" class="form-label">Nama Peralatan</label>
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
                    <option disabled value>Pilih Nama Pegawai</option>
                    @foreach ($pegawai_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_pegawai }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_produksi" class="form-label">Jumlah Produksi</label>
                <input type="text" class="form-control" id="jumlah_produksi" name="jumlah_produksi" placeholder="Masukan Jumlah produksi">
            </div>
            <div class="mb-3">
                <label for="biaya_produksi" class="form-label">Biaya</label>
                <input type="text" class="form-control" id="biaya_produksi" name="biaya_produksi" placeholder="Masukan Biaya Produksi">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Masukkan Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal Produksi">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('produksi.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection