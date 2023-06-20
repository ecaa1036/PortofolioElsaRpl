<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTOPOLIO ELSA</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    {{-- <form action="/template" method="post"> --}}
        <style>
            body{
                background-color: rgb(23, 219, 157);
            }
        </style>
        <form action="{{ url('login/auth') }}" method="post">
            @csrf
            <div class="container h-100">
                <div class="row h-50 d-flex justify-content-center align-items-center">
                    <div class="col-md-4 py-4">
                       <div class="card-body p-0">
                          <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                        <h2 class="fw-bold text-center">LOGIN</h2>
                                        <div class="col-mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                                        </div>
                                        <div class="col-mb-3">
                                            <label for="" class="form-lable">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                                        </div>
                                        <div class="pt-3">
                                            <input type="submit" value="Login" class="form-control btn btn-primary">
                                        </div>
                                        <div class="mb-3 text-center">
                                                Apakah Anda Punya Akun? <a href="register">Register</a>
                                        </div>
                                </div>
                        
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </form>
   </div>
        
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>