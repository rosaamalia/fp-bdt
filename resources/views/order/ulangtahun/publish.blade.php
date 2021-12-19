<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Undangan Ulang Tahun</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/preview.css">

    @include('components.fonts')

    <style>

        main {
            font-family: 'Montserrat', sans-serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>

    </head>
    <body style="background-color: #FEDCDB">

      <header>
          <nav class="navbar navbar-expand-lg navbar-dark px-3 fixed-top" style="background: #FE6694">
              <div class="container-fluid">
                  <a class="navbar-brand ms-0" style="color: white"><strong>Undangan</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#tentangku">Tentangku</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#jadwal">Jadwal Acara</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#bukutamu">Buku Tamu</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </header>
        <main>
              
                <section class="py-5 text-center container-fluid mx-0" style="background: url(/img/background-ulangtahun.png); background-repeat: no-repeat; background-size: 100vw; color: white">
                  <div class="row-12 py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <p class="lead" style="font-size: 15px">Undangan Ulang Tahun</p>
                      <h1 class="fw-light">{{ $detail[0]['nama_ulangtahun'] }}</h1>
                      <hr class="my-3" style="border-top: 1px; border-color: #b3b3b3; border-style: solid; width: 100%">
                      <p class="lead">Wishing you a day filled with happiness and a year filled with joy. Happy birthday!</p>
                    </div>
                  </div>
                </section>

                <section class="d-flex justify-content-center" id="tentangku">
                    <div class="card my-5 shadow-sm" style="width: 80vw;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/img/ulangtahun-tentangku.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8 p-3">
                            <div class="card-body">
                              <h5 class="card-title">Tentangku</h5>
                              <p class="card-text">Halo, namaku {{ $detail[0]['nama_ulangtahun'] }}! 🎈 <br> Ini adalah ulang tahunku!.</p>
                              <p class="card-text">{{ $detail[0]['deskripsi_ulangtahun'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </section>

                <section class="p-5 my-3 d-flex justify-content-center align-items-center flex-column" style="background-color: #FEB1B7" id="jadwal">
                    <div class="row">
                        <h2>Perayaan Ulang Tahun 🎂</h2>
                    </div>
                    <hr class="my-3" style="border-top: 1px; border-color: #b3b3b3; border-style: solid; width: 50%">
                    <p>Datang dan hadiri perayaan ulang tahunku pada</p>
                    <table>
                        <tr>
                            <td style="width: 150px"><strong>Hari dan Tanggal</strong></td>
                            <td style="width: 240px">{{ $undangan[0]['tanggal_mulai_acara'] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 150px"><strong>Waktu</strong></td>
                            <td style="width: 240px">{{ $undangan[0]['waktu_mulai_acara'] }} - {{ $undangan[0]['waktu_berakhir_acara'] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 150px"><strong>Tempat</strong></td>
                            <td style="width: 240px">{{ $undangan[0]['lokasi_acara'] }}, {{ $undangan[0]['alamat_acara'] }}</td>
                        </tr>
                    </table>
                </section>

                <section class="py-5 text-center container-fluid mx-0" style="background: url(/img/background-bukutamu.png); background-repeat: no-repeat; background-size: 100vw; color: white; margin: 100px;" id="bukutamu">
                    <div class="row-12 py-lg-5">
                      <div class="col-lg-12 col-md-12 mx-auto">
                        <h1 class="fw-bold">Buku Tamu</h1>
                        
                        @if(session()->has('tamusukses'))
                        <div class="row justify-content-center">
                        <div class="alert alert-success alert-dismissible fade show col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11" role="alert">
                            {{ session('tamusukses') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        </div>
                        @endif
                        
                        <form action="/tamu/ulangtahun/{{ $undangan[0]['slug']}}" method="POST" style="padding-left: 300px">
                            @csrf
                        <div class="row mt-4">
                            <div class="col-2 w-bold">
                                <p>Nama</p>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control input-ubah" placeholder="Nama" aria-label="Username" name="nama_lengkap" id="nama_lengkap">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 fw-bold">
                                <p>Nomor Telepon</p>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control input-ubah" placeholder="Nomor Telepon" aria-label="Username" name="telepon" id="telepon">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 fw-bold">
                                <p>Kehadiran</p>
                            </div>
                            <div class="col-5">
                                <select class="form-select input-ubah" aria-label="Default select example" name="kehadiran" id="kehadiran">
                                    <option value="1" selected>Bisa Hadir</option>
                                    <option value="0">Tidak Bisa</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4 btn-form-ubah">
                            <div class="col-7 fs-3 fw-bold text-end justify-content-end">
                              <button class="btn button btn-simpan text-white ps-4 pe-4 fw-bold" type="submit" style="background-color: #495057">Submit</button>
                            </div>
                        </div>
                        </form>

                      </div>
                    </div>
                </section>

                <section class="p-5 mt-3 d-flex justify-content-center" style="background-color: #FEB1B7">
                    <p>Tiada kesan tanpa kehadiranmu</p>
                </section>
            
                <footer>
                    <div class="container-fluid footer" style="background-color: #FD788D">
                        <div class="container d-flex p-3">
                          <a href="#" class="me-auto p-2 text-decoration-none text-white">©Copyright Invita.id 2021</a>
                          <a href="#" class="p-2 me-5 text-decoration-none text-white">Privacy Policy</a>
                          <a href="#" class="p-2 text-decoration-none text-white">Terms & Conditions</a>
                        </div>
                      </div>
                </footer>
        </main>


        <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
