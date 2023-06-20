<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOFOLIO ELSA </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
        body {
            font-family: Arial;
        }
        /* #projects {
            background-color: #3c84cb;
        }
        #home {
            background-color: rgb(112, 185, 241);
        }
        #about {
            background-color: rgb(0, 255, 166);

        } */
        .form-label>span {
            color: #35dcdc;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ELSA NOVIANTI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
         </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg> --}}

    <!-- Home -->

    {{-- @foreach ($admin as $key => $item) --}}
        
    
    <!-- <selection id="home" class="pt-5"  style="background-color:rgb(180, 70, 70);"> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
            <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
          </svg>
    <section id="home" class="pt-5">
        <div class="container-fluid p-0">
            <div class="p-5 text-bg-white text-center">
                <img src="/storage/{{ $admin->foto }}" alt="..." width="200" class="rounded-circle img-thumbnail">
                {{-- <img src="img/icon1.png" alt="..." width="200" class="rounded-circle img-thumbnail"> --}}
                <h2 class="mt-3 fw-bold">{{  $admin->nama }}</h2>
                {{-- <h2 class="mt-3 fw-bold">ELSA NOVIANTI</h2> --}}
                <p class="fs-5">Students</p>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,272C384,288,480,256,576,229.3C672,203,768,181,864,186.7C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
          </svg>
    </section>
    <!-- Akhir Home -->
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,272C384,288,480,256,576,229.3C672,203,768,181,864,186.7C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg> --}}
    <!-- About Me -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
      <section id="about" class="pt-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About Me</h3>
                 <div class="row justify-content-center">
                    {{-- <div class="col-md-4">
                        <p>Saya adalah Siswi dari Smk Ypc Tasikmalaya jurusan Rekayasa Perangkat Lunak, Saya Memiliki Keinginan untuk menjadi Seorang 
                            Programer, Saya merupakan pribadi yang jujur, disiplin dan Bertanggung jawab
                        </p>
                    </div> --}}
                    <div class="col-md-4">
                        <p>{{$admin->deskripsi}}</p> 
                    </div>
                 </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,272C384,288,480,256,576,229.3C672,203,768,181,864,186.7C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
          </svg>
      </section>

    <!-- Akhir About  -->
    {{-- @endforeach --}}
    <!-- My Project -->
    {{-- @foreach ($portopolio as $item) --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    <section id="projects" class="pt-5">
        <div class="container">
            <div class="p-5 text-bg-light text-center">
                <!-- <h3 class="fw-bold mb-3">Projects</h3> -->
                 <h3 class="fw-bold mb-3">Projects</h3>
                 <div class="row justify-content-center">
                    @foreach ($portopolio as $item)
                    
                        <div class="col-md-4 mb-3">
                           <div class="card mt-5 ms-4" style="width: 18rem;">

                                <div class="card">
                                    <img src="/storage/{{$item->foto}}" class="card-img-top" alt="Project 1">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->kategori}}</p>
                                        <p class="card-text">{{$item->deskripsi}}</p>
                                    </div>
                                </div> 
                          </div>                 
                        </div>
                   @endforeach
 
                 </div>

            </div>
        </div>
    </section> 
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,272C384,288,480,256,576,229.3C672,203,768,181,864,186.7C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    <!-- Akhir Project -->

    <!-- awal contact -->
    {{-- @foreach ($kontak as $item) --}}
    {{-- @foreach ($kontak as $key => $item) --}}

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    <div class="p-5">
        <!-- <h3 class="fw-bold mb-3">Contact</h3> -->
        {{-- <form action="{{ $action }}" method="post"> --}}
            {{-- <form action="{{ url('kontak/create') }}" method="post"> --}}

      <section id="contact" class="pt-5">
        <h3 class="fw-bold text-center mb-3">Contact Me</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- <a href="{{ url('kontak/add') }}"></a> --}}
                <form action="{{ url('kontak/create') }}" method="post" id="form-contact">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" autocomplete="oof">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span>*</span></label>
                        <input type="text" class="form-control" id="email" name="email" autocomplete="oof">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan<span>*</span></label>
                        <textarea class="form-control"  id="pesan" name="pesan"  rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">No Hp<span>*</span></label>
                        <input type="number" class="form-control" id="nohp" name="nohp" autocomplete="oof">
                    </div>
                    {{-- <a href="{{ url('kontak/add') }}"> --}}
                        <button type="submit"  class="btn btn-primary">Kirim</button>
                    {{-- </a> --}}
                {{-- </form> --}}
            </div>
        </div>
      </section>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,272C384,288,480,256,576,229.3C672,203,768,181,864,186.7C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
    <!-- akhir contact -->
    {{-- @endforeach --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path fill="#0099ff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,133.3C672,139,768,85,864,96C960,107,1056,181,1152,218.7C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    <!-- Awal Footer -->
    <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
            <p class="text-center">&copy; 2023 Smk Ypc <a href="https:/www.instagram.com/softwaree/"
                target="_blank" class="fw-bold text-decoration-none">Elsa Novianti</a></p>
        </footer>
    </div>
    <!-- Akhir Footer -->


</body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>
