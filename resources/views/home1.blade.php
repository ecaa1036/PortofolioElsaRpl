<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">ELSA NOVIANTI</a>
            {{-- <a class="navbar-brand" href="#page-top">ELSA NOVIANTI :{{Auth()->user()->"name"}}</a> --}}
            <button class="navbar-toggler text-white font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="admin" class="nav-link {{ Request::segment(1)=='admin'?'active':'' }}">Profil</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="portopolio" class="nav-link {{ Request::segment(1)=='portopolio'?'active':'' }}">Portofolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="kontak" class="nav-link {{ Request::segment(1)=='kontak'?'active':'' }}">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="logout" class="nav-link">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('content')
    </div>
    <script>
    $(document).ready(function () {
    $('tabel').DataTable();


    });</script>
</body>
</html>
{{-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container h-100">
            <div class="row h-50 d-flex justify-content-center align-items-center">
                <div class="col-md-12 py-4">
                    <h2 class="fw-bold text-center"></h2>
                    <div class="col-mb-3">
                
                  <main>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="image/bu laras.jpeg" class="d-block carousel-image" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="image/pa pendi (1).jpeg" class="d-block carousel-image" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="image/semua.jpeg" class="d-block carousel-image" alt="...">
                          </div> 
                          <!-- <div class="text-center">
                            <img src="image/download3.png" class="rounded w-50" alt="image">
                          </div> -->

                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       </main>
        </body>
      <style src="text/css">
       .carousel-image{
         width: 100%;
        height: 500px;
  } --}}

{{-- </style>
</html> --}}