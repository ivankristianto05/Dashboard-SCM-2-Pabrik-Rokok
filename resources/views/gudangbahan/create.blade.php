@extends('layouts.dashboard')
@section('content')
        <h3>Silahkan Input data Gudang Bahan</h3>
        <form action="/gudangbahan" method="POST" class="">
            @csrf
            <div class="mb-3">
            <div class="form-group">
                <label for="id_bahan" class="form-label">nama bahan</label>
                <select class="form-control select2" style="width: 100%;" name="id_bahan" id="id_bahan">
                    <option disabled value>Pilih Nama Bahan</option>
                    @foreach ($bahan_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bahan }}></option>
                    @endforeach
                </select>
            </div>
                <label for="jumlah_bahan" class="form-label">Jumlah Bahan</label>
                <input type="text" class="form-control" id="jumlah_bahan" name="jumlah_bahan" placeholder="Masukan jumlah stock bahan">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('gudangbahan.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection