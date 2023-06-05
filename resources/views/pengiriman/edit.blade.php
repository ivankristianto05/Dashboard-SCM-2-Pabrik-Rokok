@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Pengiriman</h4>
        <form action="/pengiriman/update/{{$pengiriman->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_outlet" class="form-label">Nama Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet">
                    <option disabled value>Pilih Nama Outlet</option>
                    @foreach ($outlet_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Nama Barang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="biaya_pengiriman" class="form-label">Biaya Pengiriman</label>
                <input type="text" class="form-control" id="biaya_pengiriman" name="biaya_pengiriman" placeholder="Masukkan Biaya Pengiriman" value="{{$pengiriman->biaya_pengiriman}}">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Pengiriman" value="{{$pengiriman->tanggal}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection