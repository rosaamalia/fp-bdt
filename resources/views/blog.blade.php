<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/blog.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>     
    @include('components.fonts')                                    
    
  </head>
  <body>
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
        <h1 class="" style="font-size: 5rem"><strong>Invita </strong>Blog</h1>
        <div class="row justify-content-center pt-4">
          <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-8 col-sm-9 col-8">
            <p class="fs-2 fw-normal" style="letter-spacing: 3px">Bacaan terbaik kami suguhkan untuk Anda.</p>
          </div>
        </div>
      </div>
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-8">
                  <div class="input-group mb-3">
                      <input type="text" class="form-control pt-4 pb-4 fs-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari artikel yang anda inginkan..." style="border-radius: 10px 0 0 10px;">
                      <button class="button input-group-text ps-4 pe-4 fs-2" id="inputGroup-sizing-default" type="submit" style="border-radius: 0 10px 10px 0;"><i class="bi bi-search"></i></button>
                  </div>

              </div>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,192L40,170.7C80,149,160,107,240,80C320,53,400,43,480,53.3C560,64,640,96,720,138.7C800,181,880,235,960,229.3C1040,224,1120,160,1200,138.7C1280,117,1360,139,1400,149.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
      </svg>
    </section>
    <!-- end jumbotron 1-->

    <!-- blog -->
    <div class="container">
        <div class="row justify-content-center fs-4 gap-5">
            <div class="col-5 mb-5">
                <div class="card h-100" style="width: 50rem; border-radius:15px">
                    <img src="img/blog1.png" class="card-img-top" style="border-radius:15px 15px 0 0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2" style="color : #044581">10 Manfaat Menggunakan Undangan Digital</h5>
                        <p class="fs-5" style="color: #B5B5B5">November 15, 2018, 6:03:17 PM</p>
                        <p class="card-text">Dengan begitu banyak pasangan modern yang mencari 
                            cara untuk menghemat uang dan menyederhanakan rencana pernikahan mereka, 
                            tidak heran jika semakin banyak pasangan yang beralih ke undangan digital.
                        </p>
                    </div>
                    <div class="card-footer border-0 pb-4 text-center">
                        <a href="https://invita.id/blogs/2018/12/08/10-benefits-of-using-online-wedding-invitations" class="button btn text-white fs-5 fw-bold ps-5 pe-5" style="border-radius:15px; background-color: #0199FF">Baca Artikel</a>
                    </div>
                </div>
            </div>
            <div class="col-5 mb-5">
                <div class="card h-100" style="width: 50rem; border-radius:15px">
                    <img src="img/blog2.png" class="card-img-top" style="border-radius:15px 15px 0 0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2" style="color : #044581">9 Hari Paling Populer untuk Bertunangan</h5>
                        <p class="fs-5" style="color: #B5B5B5">November 15, 2018, 6:03:17 PM</p>
                        <p class="card-text">Pelajari lebih lanjut tentang hari-hari paling populer untuk bertunangan, 
                            dan mulailah mempersiapkan proposal Anda yang tak terlupakan!
                        </p>
                    </div>
                    <div class="card-footer border-0 pb-4 text-center">
                        <a href="https://invita.id/blogs/2018/11/16/top-9-most-popular-days-to-get-engaged" class="button btn text-white fs-5 fw-bold ps-5 pe-5" style="border-radius:15px; background-color: #0199FF">Baca Artikel</a>
                    </div>
                </div>
            </div>
            <div class="col-5 mb-5">
                <div class="card h-100" style="width: 50rem; border-radius:15px">
                    <img src="img/blog3.png" class="card-img-top" style="border-radius:15px 15px 0 0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2" style="color : #044581">7 Alasan Mengapa Setiap Pengantin Harus Memiliki Website Pernikahan</h5>
                        <p class="fs-5" style="color: #B5B5B5">November 15, 2018, 6:03:17 PM</p>
                        <p class="card-text">Website pernikahan adalah halaman web yang menjadi 
                            sahabat calon pengantin dalam membantu proses perencanaan hari pernikahannya
                        </p>
                    </div>
                    <div class="card-footer border-0 pb-4 text-center">
                        <a href="https://invita.id/blogs/2018/11/15/7-reasons-why-every-bride-should-have-a-wedding-website" class="button btn text-white fs-5 fw-bold ps-5 pe-5" style="border-radius:15px; background-color: #0199FF">Baca Artikel</a>
                    </div>
                </div>
            </div>
            <div class="col-5 mb-5">
                <div class="card h-100" style="width: 50rem; border-radius:15px">
                    <img src="img/blog4.png" class="card-img-top" style="border-radius:15px 15px 0 0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2" style="color : #044581">Kenapa Harus Memilih Kami? Ini Alasanya!</h5>
                        <p class="fs-5" style="color: #B5B5B5">November 15, 2018, 6:03:17 PM</p>
                        <p class="card-text">Kami sebagai vendor undangan digital pertama di Indonesia 
                            akan selalu berusaha menjadi yang terbaik!
                        </p>
                    </div>
                    <div class="card-footer border-0 pb-4 text-center">
                        <a href="#" class="button btn text-white fs-5 fw-bold ps-5 pe-5" style="border-radius:15px; background-color: #0199FF">Baca Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->

    <!-- diliput -->
    <div class="container-fluid diliput" style="margin-top: 75px; margin-bottom: 75px">
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
