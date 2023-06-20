@extends('template')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>input</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        {{-- <h2 class="fw-bold text-center">Input Portopolio</h2> --}}
        {{-- <form action="{{ url('admin/create')}}" method="post" enctype="multipart/form-data"> --}}
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            {{-- <form action="{{ url('portopolio/create')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            <div class="row">
                <div class="container-fluid p-3 mt-5">
                    <div class="card">
                        <form action="">
                            <h2 class="fw-bold text-center">Portopolio</h2>

                            <div class="col-mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $portopolio->nama}}"  placeholder="Masukan nama lengkap">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Kategori</label>
                                <input type="text" name="kategori" class="form-control" value="{{ $portopolio->kategori }}"  placeholder="Masukan kategori">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="{{ $portopolio->deskripsi}}" placeholder="Masukan deskripsi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" value="{{ $portopolio->foto}}" placeholder="Masukan foto">
                            </div>
                            <div class="pt-3">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                </div>
                </div>
            </div>
        </form>       
    </body>
    </html>
@endsection