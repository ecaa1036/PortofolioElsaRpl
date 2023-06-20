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
        <form action="{{ $action }}" method="post">
            {{-- <form action="{{ url('portopolio/create')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            <div class="row">
                <div class="container-fluid p-3 mt-5">
                    <form action="">
                        <h2 class="fw-bold text-center">Contact</h2>

                        <div class="col-mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="{{ $kontak->nama_lengkap}}"  placeholder="Masukan nama lengkap">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $kontak->email }}"  placeholder="Masukan email">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Pesan</label>
                            <input type="text" name="pesan" class="form-control" value="{{ $kontak->pesan}}" placeholder="Masukan pesan">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">No Hp</label>
                            <input type="number" name="nohp" class="form-control" value="{{ $kontak->nohp}}" placeholder="Masukan nohp">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </form>       
    </body>
    </html>
@endsection