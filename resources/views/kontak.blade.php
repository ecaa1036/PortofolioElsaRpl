@extends('template')
@section('content')

<div class="container" style="margin-top: 7%">
    <div class="container" style="margin-top: 10%">
        <h2 class="fw-bold text-center">CONTACT</h2>
    {{-- <a class="" href="{{ url('kontak/add')}}"><button class=" btn btn-primary">Tambah Contact</button></a> --}}
    
        <table class="table table-bordered">
<a href="{{ url('kontak/add')}}"></a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Nohp</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kontak as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->pesan }}</td>
            <td>{{ $item->nohp }} </td>
            <td>
                <a href="kontak/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
                {{-- <a href="kontak/edit/{{ $item->id }}" class="btn btn-success btn-sm">Edit</a> --}}
            </td>
            </tr>
        </body>
        </html>
        @endforeach
    </table>
</div>
@endsection
