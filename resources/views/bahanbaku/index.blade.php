@extends('layouts.dashboard')

@section('content')
<h1 class="display-6">Data Bahan Baku</h1>
<a href="/bahanbaku/create"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-clipboard2-plus"></i> Tambah</button></a>
<a href="{{ route('bahan.pdf') }}"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"><i class="bi bi-printer"></i> Cetak</button></a>
<div class="table-responsive">
<table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead style="background-color: #5bc0de;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Bahan Baku</th>
                <th scope="col">baik digunakan</th>
                <th scope="col">takaran</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bahanbaku as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_bahan }}</td>
                <td>{{ $item->baik_digunakan }}</td>
                <td>{{ $item->takaran }}</td>
                <td>
                    <a class="btn btn-warning" href="/bahanbaku/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/bahanbaku/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          </div>
@endsection