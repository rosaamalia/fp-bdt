<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/portfolio.css" />
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
        <h1 class="" style="font-size: 5rem">Portfolio Terbaik Kami</h1>
        <div class="row justify-content-center pt-4">
          <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-8 col-sm-9 col-8">
            <p class="fs-2 fw-normal" style="letter-spacing: 3px">Portfolio Terbaik yang Kami persembahkan untuk customer kami.</p>
          </div>
        </div>
        <div class="row justify-content-center pt-4">
          <div class="col-xl-3 col-lg-4">
            <a href="/order">
              <button type="button" class="btn btn-light fw-bold pt-4 pb-4 ps-5 pe-5" style="color: #0199ff; font-size: 2.5rem; z-index: 99999">Order Sekarang</button>
            </a>
          </div>
        </div>
      </div>
      <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L60,154.7C120,181,240,235,360,234.7C480,235,600,181,720,165.3C840,149,960,171,1080,192C1200,213,1320,235,1380,245.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end jumbotron 1-->

    <!-- Portfolio -->
    <div class="container">
      <div class="row justify-content-end mb-5 me-5 pe-5">
        <div class="col-2">
          <div class="input-group">
            <select class="form-select text-white fw-bold fs-3 pb-2 pt-2 ps-3 pb-3" id="jenis-kegiatan" style="background-color:#0199FF">
              <option class="bg-white text-black fw-normal">Jenis Kegiatan</option> 
              <option class="bg-white text-black fw-normal" value="pernikahan">Pernikahan</option>
              <option class="bg-white text-black fw-normal" value="ultah">Ulang Tahun</option>
              <option class="bg-white text-black fw-normal" value="lainnya">Lainnya</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row row-portfolio pernikahan justify-content-evenly" id="">
        <!-- <div class=""> -->
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/fredi-maleeva.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Fredi & Maleeva</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">21-03-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="https://invita.id/fredimaleeva" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/arif-dita.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Arif & Dita</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">20-03-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="https://invita.id/weddingofarifdita" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/melda-dio.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Melda & Dio</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">06-03-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/amel-dhika.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Amel & Dhika</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">23-02-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Cilegon</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/myrantika-triyan.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Myrantika & Triyan</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">21-03-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/ayu-angga.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Ayu & Angga</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">12-01-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Merak</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/dini-tajul.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Dini & Tajul</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">12-12-2021</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Cikande</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/ayu-rustam.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Ayu & Rustam</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">16-12-2020</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Cilegon</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/venna-andi.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Venna & Andi</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">05-12-2020</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/dessi-bayu.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Dessi & Bayu</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">14-11-2020</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 img-port bg-success p-0" style="">
                <img class="" src="img/icha-haris.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Icha & Haris</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">07-11-2020</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Rangkasbitung</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
            <div class="row list-portfolio" style="background-color: #f9f9f9">
              <div class="col-3 bg-success p-0" style="">
                <img class="" src="img/elda-rifai.png" alt="" />
              </div>
              <div class="col-9">
                <div class="row row-text-port mt-4" style="">
                  <div class="col-2 text-center">
                    <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                  </div>
                  <div class="col-10">
                    <h2 style="font-size: 2.5rem; color: #0199FF">Elda & Rifai</h2>
                  </div>
                </div>
                <div class="row mt-4 row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">08-08-2020</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                  </div>
                </div>
                <div class="row row-text-port" style="">
                  <div class="col-2 text-center">
                    <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                  </div>
                  <div class="col-10">
                    <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div> -->

        </div>
      </div>
      <div class="row row-portfolio ultah justify-content-evenly" id="">
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="" src="img/john-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">John’s Birthday</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">21-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 bg-success p-0" style="">
              <img class="" src="img/rebecca-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Rebecca Holden</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">20-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="" src="img/samantha-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Samantha</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">06-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 bg-success p-0" style="">
              <img class="" src="img/merry-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Merry</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">23-02-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Cilegon</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="" src="img/kayle-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Kayle</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">21-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 bg-success p-0" style="">
              <img class="" src="img/rinta-birthday.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Rinta</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">20-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-portfolio lainnya justify-content-evenly" id="">
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="" src="img/karen-lainnya.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Karen’s Bridal Shower</h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">21-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Pandeglang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 ps-lg-5 col-md-9 col-sm-12 d-sm-block d-none pb-5">
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 bg-success p-0" style="">
              <img class="" src="img/yusuf-lainnya.png" alt="" />
            </div>
            <div class="col-9">
              <div class="row row-text-port mt-4" style="">
                <div class="col-2 text-center">
                  <span class="material-icons" style="font-size: 35px; color: #0199FF"> people </span>
                </div>
                <div class="col-10">
                  <h2 style="font-size: 2.5rem; color: #0199FF">Khitanan Pertama Yusuf </h2>
                </div>
              </div>
              <div class="row mt-4 row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-calendar3" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">20-03-2021</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-signpost-2-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <p style="font-size: 1.5rem; color: #aaa">Serang</p>
                </div>
              </div>
              <div class="row row-text-port" style="">
                <div class="col-2 text-center">
                  <i class="bi bi-eye-fill" style="font-size: 1.5rem; color: #aaa"></i>
                </div>
                <div class="col-10">
                  <a href="#" style="font-size: 1.5rem; text-decoration: none; color: #aaa">Lihat Tampilan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Portfolio -->

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

    <!-- footer -->
    @include('components/footer')
    <!-- end footer -->
  </body>

  <!-- jquery-->
  <script>
    $(document).ready(function(){
        $("#jenis-kegiatan").change(function(){
          var name = $("#jenis-kegiatan").val();
          $(".row-portfolio").css("display", "none");
          $("."+name).css("display", "flex");
        })
      })
  </script>
  <!-- end jquery script option -->
</html>
