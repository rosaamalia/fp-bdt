<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/index.css" />

    @include('components.fonts')
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- navbar -->
    @include('components/navbar')
    <!-- end navbar -->

    <!-- jumbotron 1-->
    <section class="jumbotron text-center pt-5 text-white">
      <div class="container-fluid">
        <h1 class="" style="font-size: 7rem"><strong>Invita.</strong>id</h1>
        <div class="row justify-content-center pt-4">
          <div class="col-xxl-5 col-lg-7 col-8">
            <p class="fs-1 fw-normal" style="letter-spacing: 3px">a platform designed for easier, cheaper and a more comfortable event creation experience.</p>
          </div>
        </div>
      </div>
      <!-- <div class="row bg-dark overflow-visible position-absolute d-flex" style="width: 50%; z-index: 99"></div> -->
      <div class="row pt-4 justify-content-center position-absolute" style="left: 0; right: 0; margin-left: 7px; margin-top: 20px; z-index: 99">
        <div class="col-lg-12 col-9 d-md-block d-none text-center justify-content-center" style="height: fit-content">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="">
              <div class="carousel-item active">
                <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="img pb-5">
                      <img src="img/slide-1-jb.png" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="img pb-5">
                      <img src="img/slide-2-jb.png" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev d-md-block d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-primary rounded-3 position-relative" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-md-block d-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-primary rounded-3" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row pt-4 justify-content-center position-absolute" style="left: 0; right: 0; margin-left: -45px">
        <div class="col-lg-12 col-9 d-md-block d-none">
          <img class="img-fluid" src="img/slide-jumbotron.png" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
          </svg>
        </div>
      </div>
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="">
        <path fill="#000b76" fill-opacity="1" d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg> -->
    </section>
    <!-- end jumbotron 1-->

    <!-- jumbotron 2 -->
    <section class="jumbotron jb-img text-center text-white position-relative" style="margin-top: 200px; background-color: #0081d8">
      <div class="container text-start overflow-hidden" style="padding-top: 100px">
        <h4 class="fw-normal" style="font-size: 2.4rem">Hadirkan Undangan Unik dan Istimewa</h4>
        <div class="col-lg-5 col-12">
          <h1 class="fw-bold" style="font-size: 4rem">Website Undangan Digital Sesuai Selera Anda</h1>
        </div>
        <div class="row pt-4">
          <div class="col-lg-6 col-12">
            <p class="fw-normal" style="letter-spacing: 1px; font-size: 2.4rem">
              Jadikan undangan acara anda berbeda dan lebih istimewa dibandingkan acara lainnya. Undangan acara anda akan tampil di website dan bisa diakses oleh tamu anda dari mana saja. Dengan fitur-fitur yang user friendly dan
              lengkap, anda juga akan mendapatkan website acara setema dengan undangan anda.
            </p>
          </div>
        </div>
        <div class="btn-buat-undangan row pt-4">
          <div class="col-lg-6 position-absolute">
            <button type="button" class="btn btn-light fw-bold p-3 ps-5 pe-5" style="color: #0199ff; font-size: 2.8rem">Buat Undanganmu Sekarang</button>
          </div>
        </div>
        <div id="jb-carousel" class="carousel slide couple img-fluid position-absolute d-lg-block d-none" data-bs-ride="carousel" style="left : 100px; border-radius: 0 0 0 200px">
            <div class="carousel-inner" style="">
              <div class="carousel-item active">
                <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="img pb-5">
                      <img src="img/jb-img.png" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="img pb-5">
                      <img src="img/jb-2-img.png" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev d-md-block d-none position-absolute" type="button" data-bs-target="#jb-carousel" data-bs-slide="prev" style="top: -500px">
              <span class="carousel-control-prev-icon bg-primary rounded-3" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-md-block d-none position-absolute" type="button" data-bs-target="#jb-carousel" data-bs-slide="next" style="top: -500px">
              <span class="carousel-control-next-icon bg-primary rounded-3" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- <img class="couple img-fluid position-sticky d-lg-block d-none" src="img/jb-img.png" alt="" style="border-radius: 0 0 0 200px" /> -->
      </div>
      <div class="row position-sticky" style="margin-top: -80px">
        <div class="col-12">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#fafafa"
              fill-opacity="1"
              d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,117.3C672,107,768,149,864,181.3C960,213,1056,235,1152,240C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
        </div>
      </div>
    </section>
    <!-- end jumbotron 2-->

    <!-- mengapa harus kita -->
    <section class="why jb-img" style="background-color: #fafafa">
      <div class="container" style="padding-top: 100px">
        <div class="row list-why" style="top: 210px">
          <div class="col-xl-12 col-lg-11 col-md-12">
            <img class="img-fluid" src="img/Group 1.png" alt="" />
          </div>
        </div>
        <div class="row list-why" style="top: 295px; right: 30px">
          <div class="col-xl-12 col-lg-11 col-md-12">
            <img class="img-fluid" src="img/Group 2.png" alt="" />
          </div>
        </div>
        <div class="row list-why" style="top: 435px; left: 50px">
          <div class="col-xl-12 col-lg-11 col-md-12">
            <img class="img-fluid" src="img/Group 3.png" alt="" />
          </div>
        </div>
        <div class="row list-why" style="top: 535px; right: 10px">
          <div class="col-xl-12 col-lg-11 col-md-12">
            <img class="img-fluid" src="img/Group 4.png" alt="" />
          </div>
        </div>
        <div class="row list-why" style="top: 620px; left: 30px">
          <div class="col-xl-12 col-lg-11 col-md-12">
            <img class="img-fluid" src="img/Group 5.png" alt="" />
          </div>
        </div>
        <div class="row text-center bg-why">
          <div class="col-12">
            <img class="img-fluid" src="img/group-why-bg.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end mengapa harus kita-->

    <!-- portfolio -->
    <section class="portfolio bg-white" style="">
      <div class="container text-center">
        <h1 class="fw-bold" style="color: #044581; font-size: 4rem">Portfolio</h1>
        <h4 style="font-size: 2.4rem">Penawaran terbaik untuk anda</h4>

        <div class="row text-center" style="">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto1.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/constellation/home/KnOjnROxiJM76AyiSz6H" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Constelation</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Basic</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto2.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/vibrantrustic/home/5VvNkneuZpRlQyfRcYOM" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Vibrant Rustic</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Basic</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto3.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/winterromance/home/lmcFYURZIrTdiTnEgga9" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Winter Romance</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Basic</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto4.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/classymarble/home/iM68XBFMLAu3hT9CF5qS" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Classy Marble</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Premium</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto5.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/sweetbotanical/home/qzcpcOKZdYxOYcnibHGx" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Sweet Botanical</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Premium</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
              <div class="card-head position-relative">
                <img src="img/porto6.png" class="card-img-top" alt="..." />
                <div class="overlay"></div>
                <div class="button d-flex justify-content-center"><a href="https://invita.id/mistygold/home/QSAaq2tAQmegkfEP5bIu" class="btn btn-primary fw-bold" style="font-size: 1.6rem">Preview</a></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="font-size: 2rem">Rising Star</h5>
                <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Premium</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-5 col-12">
            <button type="button" class="btn btn-light p-2 ps-3 pe-3 text-white mt-5" style="background-color: #0199ff; font-size: 1.6rem">Lihat Portfolio Lainnya</button>
          </div>
        </div>
      </div>
    </section>
    <!-- end portfolio-->

    <!-- review -->
    <section class="review-home" style="background-color: #fafafa">
      <div class="container text-center pt-5 pb-5" style="margin-top: 100px">
        <div class="row">
          <div class="col-12">
            <h1 class="fw-normal" style="color: #044581; font-size: 4rem"><strong>Apa Kata </strong>Mereka?</h1>
          </div>
        </div>
        <div class="row mt-5 position-relative" style="">
          <div class="col-12 d-lg-block d-none">
            <img class="img-fluid" src="img/review-box.png" alt="" />
          </div>
          <div class="row overflow-visible position-absolute align-items-center justify-content-center" style="left: 8%; height: 100%; width: 85%">
            <div class="col-12" style="height: fit-content">
              <div id="carouselReviewIndicators" class="carousel slide overflow-visible " data-bs-ride="carousel">
                <div class="carousel-inner" style="">
                  <div class="carousel-item active">
                    <div class="row justify-content-center">
                      <div class="col-xl-6 col-lg-8 col-12">
                        <div class="img pb-5">
                          <img src="img/photo-review-1.png" class="img-fluid position-sticky shadow rounded-circle" alt="" style="width: 100px; margin-top: 20px" />
                        </div>
                        <h5 style="font-size: 2rem"><strong>Ira Feng</strong></h5>
                        <p style="font-size: 1.6rem">
                          Invita is so helpful for us to invite our guests to our special day. I really recommend Invita as digital invitation for your event. We're impressed with Invita's service and We dare say you'll be pleased with the experience too! Invita's digital invitation is elegant, easy to send out and what's great is that it's environmentally friendly! Let's save earth from
                          Global warming :)
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-center">
                      <div class="col-xl-8 col-lg-8 col-12">
                        <div class="img pb-5">
                          <img src="img/photo-review-2.png" class="img-fluid shadow position-sticky rounded-circle" alt="" style="width: 100px; margin-top: 0px" />
                        </div>
                        <h5 style="font-size: 2rem"><strong>Fredy Wong</strong></h5>
                        <p style="font-size: 1.6rem">
                          Thanks Invita.id for the great support in making us easier to share our digital invitation to our lovely guest. We can share any of our wedding vibe just put everything inside the
                          invitation. It can be theme-customized with all data for couples such as; our love story, our prewed photography, our guest list reservations, wishes and still so many thigs to
                          add. Thanks for made it happened!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-center">
                      <div class="col-xl-8 col-lg-8 col-12">
                        <div class="img pb-5">
                          <img src="img/photo-review-3.png" class="img-fluid shadow position-sticky rounded-circle" alt="" style="width: 100px; margin-top: 0px" />
                        </div>
                        <h5 style="font-size: 2rem"><strong>Sasti Cantika</strong></h5>
                        <p style="font-size: 1.6rem">
                          Kepikiran untuk buat undangan online, tapi mikir gimana cara nyebarinnya biar online, tapi tetep terasa private-nya. Supaya kesannya ngak asal sebar, jadi yang diundang pun merasa penting. Ternyata eh ternyata di jaman semua semua serba digital ini, kebutuhan itu udah dicover sama Invita. Jadi itungannya juga lebih irit untuk orang-orang yang tinggal di luar kota tapi pengen kita undang. Tinggal kirim undangan
                          digital, gak perlu lagi kirim kirim via pos.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev d-lg-block d-none" type="button" data-bs-target="#carouselReviewIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bg-primary rounded-3 style" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-lg-block d-none" type="button" data-bs-target="#carouselReviewIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon bg-primary rounded-3" aria-hidden="true" style="background-size: 3.2rem; width: 3.2rem; height: 3.2rem"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end review -->

    <!-- contact us -->
    <div class="container contact-us text-center" style="padding: 0; background-image: url(img/bg-contact.png); background-repeat: no-repeat; background-size: cover; background-position: center">
      <div class="row row-hubungi">
        <h1 class="text-white fw-bold" style="font-size: 4rem">Hubungi Kami</h1>
      </div>
      <div class="row justify-content-center position-relative d-md-flex d-none" style="top: 10%">
        <div class="col-4 blue-contact position-absolute text-white">
          <div class="blue-box" style="background-color: #00548c; border-radius: 10px; width: 333px; height: 387px">
            <div class="row ps-5">
              <div class="col-12 mt-5 ps-4 text-start">
                <h2>Informasi Kontak</h2>
              </div>
            </div>
            <div class="row mb-2 fs-4 text-center justify-content-center" style="margin-top: 30px">
              <div class="col-2 pt-2"><img src="img/loc-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>Perum Telaga Murni, Jl. Semangka 1, Kab. Bekasi, Kec. Cikarang Barat 17530</p>
              </div>
            </div>
            <div class="row mt-4 mb-2 fs-4 text-center justify-content-center">
              <div class="col-2"><img src="img/email-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>hgostline.gt@gmail.com</p>
              </div>
            </div>
            <div class="row mt-4 mb-2 fs-4 text-center justify-content-center">
              <div class="col-2"><img src="img/call-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>0896-3124-2977</p>
              </div>
            </div>
            <div class="row ps-5" style="margin-top: 50px">
              <div class="col-2">
                <a href=""><img src="img/fb-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/twitter-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/ig-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/wa-white-icon.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="box-white bg-white text-start" style="width: 100%">
            <h2 class="pesan fw-bold" style="padding-top: 70px">Kirim Pesan</h2>
            <form id="pesan" action="">
              <div class="row text-start mt-lg-5 mt-4">
                <div class="col col-xl-5 col-lg-5 col-md-8 col-nama">
                  <div class="row">
                    <label for="nama" class="form-label fw-bold fs-4" style="color: #227aff">Nama Lengkap</label>
                  </div>
                  <div class="row">
                    <input type="text" class="form-control fw-bold fs-5" id="nama" placeholder="Masukkan nama lengkap" aria-describedby="nama" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
                <div class="col col-xl-5 col-lg-5 col-md-8 col-nomor">
                  <div class="row">
                    <label for="no" class="form-label fw-bold fs-4" style="color: #227aff">Nomor Hp</label>
                  </div>
                  <div class="row">
                    <input type="tel" class="form-control fw-bold fs-5" id="no" placeholder="Masukkan nomor hp" aria-describedby="no" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col col-xl-5 col-lg-5 col-md-8 col-subjek">
                  <div class="row">
                    <label for="subjek" class="form-label fw-bold fs-4" style="color: #227aff">Subjek</label>
                  </div>
                  <div class="row">
                    <input type="text" class="form-control fw-bold fs-5" id="subjek" placeholder="Masukkan subjek pesan" aria-describedby="subjek" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
                <div class="col col-xl-5 col-lg-5 col-md-8 col-email">
                  <div class="row">
                    <label for="email" class="form-label fw-bold fs-4" style="color: #227aff">Email</label>
                  </div>
                  <div class="row">
                    <input type="email" class="form-control fw-bold fs-5" id="email" placeholder="Masukkan email" aria-describedby="email" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col col-xl-11 col-lg-11 col-md-8 col-pesan">
                  <div class="row">
                    <label for="pesan" class="form-label fw-bold fs-4" style="color: #227aff">Tulis Pesan Disini ...</label>
                  </div>
                  <div class="row">
                    <input type="pesan" class="form-control fw-bold fs-5" id="subjek" placeholder="Tulis pesan anda" aria-describedby="pesan" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col-12">
                  <button type="button" class="btn btn-primary ps-4 pe-4 pb-2 pt-2 fs-4" style="border-radius: 10px" onclick="window.location.href='/'">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-md-none mt-5">
        <div class="col-10">
          <div class="bg-white text-start" style="padding: 35px; border-radius: 10px">
            <h2 class="pesan fw-bold" style="">Kirim Pesan</h2>
            <form id="pesan" action="">
              <div class="row text-start mt-lg-5 mt-4">
                <div class="col-sm-12 col-nama">
                  <div class="row">
                    <label for="nama" class="form-label fw-bold fs-4" style="color: #227aff">Nama Lengkap</label>
                  </div>
                  <div class="row">
                    <input type="text" class="form-control fw-bold fs-5" id="nama" placeholder="Masukkan nama lengkap" aria-describedby="nama" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
                <div class="col-sm-12 col-nomor">
                  <div class="row">
                    <label for="no" class="form-label fw-bold fs-4" style="color: #227aff">Nomor Hp</label>
                  </div>
                  <div class="row">
                    <input type="tel" class="form-control fw-bold fs-5" id="no" placeholder="Masukkan nomor hp" aria-describedby="no" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col-sm-12 col-subjek">
                  <div class="row">
                    <label for="subjek" class="form-label fw-bold fs-4" style="color: #227aff">Subjek</label>
                  </div>
                  <div class="row">
                    <input type="text" class="form-control fw-bold fs-5" id="subjek" placeholder="Masukkan subjek pesan" aria-describedby="subjek" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
                <div class="col-sm-12 col-email">
                  <div class="row">
                    <label for="email" class="form-label fw-bold fs-4" style="color: #227aff">Email</label>
                  </div>
                  <div class="row">
                    <input type="email" class="form-control fw-bold fs-5" id="email" placeholder="Masukkan email" aria-describedby="email" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col l-sm-12 col-pesan">
                  <div class="row">
                    <label for="pesan" class="form-label fw-bold fs-4" style="color: #227aff">Tulis Pesan Disini ...</label>
                  </div>
                  <div class="row">
                    <input type="pesan" class="form-control fw-bold fs-5" id="subjek" placeholder="Tulis pesan anda" aria-describedby="pesan" style="border: none" />
                    <hr style="color: #000000; opacity: 1; border: 1px solid; border-radius: 5px" />
                  </div>
                </div>
              </div>
              <div class="row text-start mt-lg-4 mt-4">
                <div class="col-12">
                  <button type="button" class="btn btn-primary ps-4 pe-4 pb-2 pt-2 fs-4" onclick="window.location.href='/'" style="border-radius: 10px">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-md-none mt-5">
        <div class="col-10 text-white">
          <div class="" style="background-color: #00548c; border-radius: 10px; height: 387px">
            <div class="row ps-5">
              <div class="col-12 mt-5 ps-4 text-start">
                <h2>Informasi Kontak</h2>
              </div>
            </div>
            <div class="row mb-2 fs-4 text-center justify-content-center" style="margin-top: 30px">
              <div class="col-2 pt-2"><img src="img/loc-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>Perum Telaga Murni, Jl. Semangka 1, Kab. Bekasi, Kec. Cikarang Barat 17530</p>
              </div>
            </div>
            <div class="row mt-4 mb-2 fs-4 text-center justify-content-center">
              <div class="col-2"><img src="img/email-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>hgostline.gt@gmail.com</p>
              </div>
            </div>
            <div class="row mt-4 mb-2 fs-4 text-center justify-content-center">
              <div class="col-2"><img src="img/call-white-icon.png" alt="" /></div>
              <div class="col-8 text-start">
                <p>0896-3124-2977</p>
              </div>
            </div>
            <div class="row ps-5" style="margin-top: 50px">
              <div class="col-2">
                <a href=""><img src="img/fb-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/twitter-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/ig-white-icon.png" alt="" /></a>
              </div>
              <div class="col-2">
                <a href=""><img src="img/wa-white-icon.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact us -->

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
