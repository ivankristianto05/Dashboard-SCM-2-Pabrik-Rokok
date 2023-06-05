@extends('layouts.dashboard')

@section('content')
<h1 class="display-6">Data Gudang Barang</h1>
<a href="/gudangbarang/create"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-clipboard2-plus"></i> Tambah</button></a>
<a href="/gudangbarang-pdf"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-printer"></i> Cetak</button></a>
<div class="table-responsive">
<table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead style="background-color: #5bc0de;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">jumlah barang yang tersedia</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudangbarang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang}}</td>
                <td>{{ $item->jumlah_barang }}</td>
                <td>
                    <a class="btn btn-warning" href="/gudangbarang/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/gudangbarang/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection