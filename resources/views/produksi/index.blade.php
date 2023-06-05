@extends('layouts.dashboard')

@section('content')
<h1 class="display-6">Data Produksi Barang</h1>
<a href="/produksi/create"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-clipboard2-plus"></i> Tambah</button></a>
<a href="/produksi-pdf"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-printer"></i> Cetak</button></a>
<div class="table-responsive">
<table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead style="background-color: #5bc0de;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama Alat</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jumlah Produksi</th>
                <th scope="col">Biaya Produksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produksi as $item)
            <tr>
            <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang}}</td>
                <td>{{ $item->RPeralatan->nama_alat}}</td>
                <td>{{ $item->RPegawai->nama_pegawai}}</td>
                <td>{{ $item->jumlah_produksi }}</td>
                <td>{{ $item->biaya_produksi }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    <a class="btn btn-warning" href="/produksi/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/produksi/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          </div>
@endsection