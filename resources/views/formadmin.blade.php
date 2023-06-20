@extends('template')
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection
{{-- @section('table') --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css"> --}}
<div class="container" style="margin-top: 10%">
    <h2 class="fw-bold text-center">PROFIL</h2>
{{-- <a class="" href="{{ url('portopolio/add')}}"><button class="btn btn-primary">Tambah</button></a> --}}

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>JK</th>
            <th>Deskripsi</th>
            <th>Almat</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($admin as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nohp }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->jk }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <img src="/storage/{{ $item->foto }}" width="150" alt="">
            </td>
            <td>
                <a href="admin/hapus/{{ $item->nis }}" class="btn btn-danger btn-sm">Hapus</a>
                <a href="admin/edit/{{ $item->nis }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

