@extends('template')
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection
{{-- @section('table') --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css"> --}}
<div class="container" style="margin-top: 10%">
    <h2 class="fw-bold text-center">PORTOPOLIO</h2>
    <table class="table table-bordered">

        {{-- <form action="{{ url ('portopolio/cari') }}" method="get">
            <input type="search" name="cari" id="cari">
            <input type="submit" value="SEARCH">
        </form>
        <div class="container-fluid p-3 mt-2">
        <br> --}}

<a class="" href="{{ url('portopolio/add')}}"><button class="btn btn-primary">Tambah Portopolio</button></a>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Portopolio</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($portopolio as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <img src="/storage/{{ $item->foto }}" width="150" alt="">
            </td>
            <td>
                <a href="portopolio/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
                <a href="portopolio/edit/{{ $item->id }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

