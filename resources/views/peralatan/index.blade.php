@extends('layouts.dashboard')

@section('content')
<h1 class="display-6">Data Peralatan</h1>
<a href="/peralatan/create"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-clipboard2-plus"></i> Tambah</button></a>
<a href="/peralatan-pdf"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-printer"></i> Cetak</button></a>
<div class="table-responsive">
<table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead style="background-color: #5bc0de;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Alat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peralatan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_alat }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->kondisi }}</td>
                <td>
                    <a class="btn btn-warning" href="/peralatan/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/peralatan/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          </div>
@endsection