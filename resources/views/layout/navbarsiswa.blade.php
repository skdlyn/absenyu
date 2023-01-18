<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi Kelas</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!--owl carousel-->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{asset('template/fontawesome/css/all.min.css')}}">
    <!--style css customan kita-->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
  </head>
<body>
    <div id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="top-contact">
                        <li><a href="#"><i class="fa fa-phone"></i> 0882-3038-9974</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> rekapanlunas.semas</a></li>
                        <li><a href="#"><i class="fas fa-bullhorn"></i> TAHUN AJARAN 2022/2023</a></li>
                    </ul>
                </div>
                <div class="class col-md-3">
                    <ul class="sosmed">
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col md-8">
                   <div class="brand">
                        <img src="{{asset('asset/img/logonew.png')}}" alt="">
                        <div class="brand-name">
                            <h1>SMK NEGERI 1 SURABAYA</h1>
                            <h3>Rekayasa Perangkat Lunak 2</h3>
                        </div>
                    </div>
                </div>
            <div class="col-md-4 pembungkus-searchbox">
                <div class="searchbox">
                    <form method="get">
                        <div class="input-group">
                            <input type="text" class="form-control"
                            placeholder="Masukkan Nama Siswa..." aria-label="Tombol Cari"
                            aria-describedby="Tombol Cari">
                            <div class="input-group-append">
                            <button class="btn btn-utama" id="Tombol Cari">CARI</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div> 
</header>

<!--section menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-biru">
    <div class="container" id="menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
          {{--Home--}}
          <div class="collapse navbar-collapse" id="my-nav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/dashboard">Dashboard</span></a>
              </li>
              <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Guru</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-dark" href="#">Materi Hari Ini</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-dark" href="#">Tugas Hari Ini</a>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Siswa</span></a>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Absensi </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-dark" href="#">Absensi Siswa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-dark" href="#">Surat Perizinan</a>
                    </div>
              </li>
            </ul>
              <li class="nav-item">
                <a class="nav-link " href="/login">Logut</span></a>
              </li>
            </ul>
        </div>
    </div>  
</nav>

<!--section hero-->
<section id="hero-area">
    <div class="slider-item">
        <div class="slider-item-img">
            
        </div>
        <div class="slider-item-contemt">
            <h2>Absensi Rutin Kelas 12 RPL 2</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi sed, autem enim amet exercitationem iusto natus debitis quia optio,
                 aspernatur incidunt nulla. Ipsum eum labore in cupiditate odit minima dolores!</p>
        </div>
    </div>
</section>

<script src="{{asset('template/js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/owl.carousel.min.js')}}"></script>
</body>
</html>