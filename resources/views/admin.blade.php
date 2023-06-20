@extends('template')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                {{-- <form action="{{ url('admin/create') }}" method="post" enctype="multipart/form-data"> --}}
                @csrf
                <div class="row">
                    <div class="container-fluid p-3 mt-5">
                        <div class="card">

                            <h2 class="fw-bold text-center"></h2>
                            <h2 class="fw-bold text-center"></h2>
                            <h2 class="fw-bold text-center"></h2>
                            <h2 class="fw-bold text-center"></h2>
                            <h2 class="fw-bold text-center">Profil</h2>
                            <form action="{{ $action }}">
                                
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Nisn</label>
                                    <input type="text" name="nis" class="form-control" value="{{ $nis }}" placeholder="Masukan nisn">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $nama }}" placeholder="Masukan nama lengkap">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">No Hp</label>
                                    <input type="number" name="nohp" class="form-control" value="{{ $nohp }}" placeholder="Masukan No Hp">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $email }}" placeholder="Masukan email">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-select">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-laki" {{ $jk}}>Laki-laki</option>
                                        <option value="Perempuan" {{ $jk}} >Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="{{ $deskripsi }}" placeholder="Masukan deskripsi">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{  $alamat }}" placeholder="Masukan alamat">
                                </div>
                                <div class="col-mb-3">
                                    <label for="" class="form-label">Foto</label>
                                    <img src="/storage/{{ $foto }}" alt="" width="250">
                                    <input type="file" name="foto" id="foto" class="form-control" value="{{ $foto }}" placeholder="Masukan foto">
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