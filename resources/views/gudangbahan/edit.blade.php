@extends('layouts.dashboard')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Edit Data Gudang Bahan</h4>
        <form action="/gudangbahan/update/{{$gudangbahan->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_bahan" class="form-label">nama bahan</label>
                <select class="form-control select2" style="width: 100%;" name="id_bahan" id="id_bahan">
                    <option disabled value>Pilih Nama Bahan</option>
                    @foreach ($bahan_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bahan }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_bahan" class="form-label">Jumlah Stock bahan</label>
                <input type="text" class="form-control" id="jumlah_bahan" name="jumlah_bahan" placeholder="Masukkan jumlah bahan" value="{{$gudangbahan->jumlah_bahan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection