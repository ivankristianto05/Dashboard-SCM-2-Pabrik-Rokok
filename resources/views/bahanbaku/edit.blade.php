@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-justify">
        <h4>Silahkan Edit Data Bahan Baku</h4>
        <form action="/bahanbaku/update/{{$bahanbaku->id}}" method="POST" class=" ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_bahan" class="form-label">Nama bahan</label>
                <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" placeholder="Masukkan Nama Bahan" value="{{$bahanbaku->nama_bahan}}"><br>
                <label for="baik_digunakan" class="form-label">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="baik_digunakan" name="baik_digunakan" placeholder="Masukkan Tanggal Kadaluarsa" value="{{$bahanbaku->baik_digunakan}}"><br>
                <label for="takaran" class="form-label">Takaran Bahan</label>
                <input type="text" class="form-control" id="takaran" name="takaran" placeholder="Masukkan Jumlah Takaran" value="{{$bahanbaku->takaran}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection