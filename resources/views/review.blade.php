<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/review-semua.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>     
    @include('components.fonts')                                    
    
  </head>
  <body style="background: linear-gradient(180deg, #227AFF 0%, #227AFF 0.01%, #5FD5FB 105.95%);">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- navbar -->
    @include('components/navbar')
    <!-- end navbar -->

    <!-- jumbotron 1-->
    <section class="jumbotron text-center text-white d-flex flex-column" style="padding-top: 100px">
      <div class="container-fluid">
        <h1 class="" style="font-size: 5rem"><strong>Invita </strong>Review</h1>
        <div class="row justify-content-center pt-4">
          <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-8 col-sm-9 col-8">
            <p class="fs-2 fw-normal" style="letter-spacing: 3px">Dedikasi sepenuh hati dan service yang maksimal untuk pelanggan kami. <br>
              Bagaimana ulasan mereka tentang Invita.id?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end jumbotron 1-->

    <!-- blog -->
    @foreach ($data as $item)
    <div class="container d-flex justify-content-center mt-5">
      <div class="card mb-3 fs-4" style="width: 70vw;">
        <div class="row g-0">
          <div class="col-md-2 ps-5 d-flex justify-content-center align-items-center">
            <img src="https://picsum.photos/{{ 200 + $item['id_order'] }}"
              class="img-fluid" style="border-radius: 50px; width: 100px" alt="...">
          </div>
          <div class="col-md-10 p-5">
            <div class="card-body">
              <h5 class="card-title fs-1">{{ $item['nama_user_review'] }}</h5>
              {{-- <p class="card-text fs-3"><small class="text-muted">{{ $item['username'] }}</small></p> --}}
              <p class="card-text fs-2" style="">{{ $item['isi_review'] }}</p>
              <div class="row-12">
                @for($i=0; $i<$item['rating']; $i++)
                <i class="bi bi-star-fill fs-3" style="color: #FDCC0D"></i>
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!-- end blog -->

    <!-- diliput -->
    <div class="container-fluid p-5 diliput" style="margin-top: 75px; padding-bottom: 75px; background: white">
      <div class="row justify-content-center" style="margin-bottom: 50px">
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-5 col-sm-6 col-7 col-2 text-center">
          <h1 style="color: #044581">Telah diliput oleh</h1>
          <hr style="color: #044581; opacity: 1; border: 1px solid; border-radius: 5px" />
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 pt-5 text-center">
          <img class="img-fluid" src="img/techinasia.png" alt="" />
        </div>
        <div class="col-lg-2 col-md-4 pt-5 text-center">
          <img class="img-fluid" src="img/dailysocial.png" alt="" />
        </div>
        <div class="col-lg-2 col-md-4 pt-5 text-center">
          <img class="img-fluid" src="img/tribun.png" alt="" />
        </div>
        <div class="col-lg-2 col-md-4 pt-5 text-center">
          <img class="img-fluid" src="img/daaai.png" alt="" />
        </div>
        <div class="col-lg-2 col-md-4 pt-5 text-center">
          <img class="img-fluid" src="img/detik.png" alt="" />
        </div>
      </div>
    </div>
    <!-- end diliput -->

    <!-- contact footer -->
    <div class="container-fluid pt-5" style="background-color: #fafafa; height: 100%">
      <div class="container">
        <div class="row d-md-flex justify-content-center">
          <div class="invita-footer-col col-lg-2 col-md-3 col-sm-4 col-8 mb-5">
            <a class="text-decoration-none text-black" href="index.html" style="font-size: 3.2rem"><strong>Invita.</strong>id</a>
          </div>
          <div class="about-footer-col col-lg-2 col-md-3 col-sm-4 col-8 mb-5">
            <div class="row">
              <h3>ABOUT</h3>
            </div>
            <div class="row">
              <p>Website jasa digital marketing, design grafis dan pembuatan website</p>
            </div>
          </div>
          <div class="contact-footer-col col-lg-3 col-md-4 col-sm-6 col-8 text-lg-end text-center ms-lg-auto mb-5" style="height: 100%">
            <a class="d-inline-block pe-4" href=""><img class="img-fluid" src="img/fb-black-icon.png" alt="" /></a>
            <a class="d-inline-block pe-4" href=""><img class="img-fluid" src="img/twitter-black-icon.png" alt="" /></a>
            <a class="d-inline-block pe-4" href=""><img class="img-fluid" src="img/ig-black-icon.png" alt="" /></a>
            <a class="d-inline-block" href=""><img class="img-fluid" src="img/wa-black-icon.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact footer -->

    <!-- footer -->
    <div class="container-fluid footer" style="background-color: #4daae9">
      <div class="container d-flex p-3">
        <a href="#" class="me-auto p-2 text-decoration-none text-white fs-4">©Copyright Invita.id 2021</a>
        <a href="#" class="p-2 me-5 text-decoration-none text-white fs-4">Privacy Policy</a>
        <a href="#" class="p-2 text-decoration-none text-white fs-4">Terms & Conditions</a>
      </div>
    </div>
    <!-- end footer -->
  </body>
</html>
