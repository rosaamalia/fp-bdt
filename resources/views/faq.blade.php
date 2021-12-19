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
    <link rel="stylesheet" href="css/faq.css" />
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
        <h1 class="" style="font-size: 5rem"><strong>Invita </strong>FAQ</h1>
        <div class="row justify-content-center pt-4">
          <div class="col-xxl-7 col-xl-10 col-lg-10 col-md-8 col-sm-9 col-8">
            <p class="fs-2 fw-normal" style="letter-spacing: 3px">Frequently Ask Question</p>
          </div>
        </div>
      </div>
      <div class="row-svg-jb">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" 
            d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,
            320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
          </svg>
      </div>
    </section>
    <!-- end jumbotron 1-->

    <!-- faq content -->
    <div class="container">
        <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Bagaimana cara membuat akun Invita?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body mt-5 mb-5 fs-3">
                    <strong class="">Melalui Pop-Up Reminder</strong>
                    <p class="mt-4 mb-5">1. Buka Website <span><a href="www.invita.id">www.invita.id</a></span> , akan muncul pop up seperti gambar dibawah ketika anda mengunjungi website</p>
                    <img class="mb-5" src="img/faq-1a.png" alt="">
                    <p class="mb-5">2. Buka Website <span><a href="www.invita.id">www.invita.id</a></span> , akan muncul pop up seperti gambar dibawah ketika anda mengunjungi website</p>
                    <img class="mb-5" src="img/faq-1b.png" alt="">
                    <p class="">3. Klik Daftar Sekarang maka akun anda akan tersimpan dan anda telah berhasil melakukan pendaftaran.</p>
                    
                    <br>
                    <br>
                    
                    <strong class="">Melalui Navigation Bar</strong>
                    <p class="mt-4 mb-5">1. Klik menu Daftar pada pojok kanan atas pada tampilan website Invita.id.</p>
                    <img class="mb-5" src="img/faq-1c.png" alt="">
                    <p class="mb-5">2. Setelah diarahkan ke halaman daftar Isi data sesuai dengan data diri anda.</p>
                    <p class="mb-5">3. Klik Daftar maka akun anda akan tersimpan dan anda telah berhasil </p>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Berapa harga untuk pembuatan undangan digital?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body mt-5 mb-5 fs-3">
                    <div class="row row-harga justify-content-center">
          <div class="col-harga col-xxl-2 col-lg-3 col-sm-6 col-7 ps-0 pe-0 me-5 overflow-hidden" style="border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px">
            <div class="row pt-5 text-center" style="background: rgb(34, 122, 255); background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)">
              <h2 class="text-white fw-bold">BASIC</h2>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L1440,96L1440,320L0,320Z"></path></svg>
            </div>

            <div class="row text-center">
              <h3 class="fs-1">IDR <strong>195K</strong></h3>
            </div>
            <div class="row text-center" style="font-size: 1.2rem">
              <p>Pilih Jumlah Tamu</p>
            </div>
            <div class="row mx-auto w-75 mb-5" style="font-size: 1.5rem">
              <ul>
                <li>Countdown Timer</li>
                <li>Foto Cover</li>
                <li>Detail Jadwal Acara</li>
                <li>Google Maps</li>
                <li>Wedding Team</li>
                <li>Registry</li>
              </ul>
            </div>
            <div class="row justify-content-center mb-5" style="font-size: 1.5rem">
              <div class="col-5 p-0 m-0">
                <button
                  type="button"
                  class="btn border-0 pt-2 pb-2 text-white w-100 fs-3 fw-bolder"
                  style="border-radius: 10px; background: rgb(34, 122, 255); background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)"
                >
                  Get This
                </button>
              </div>
            </div>
          </div>
          <div
            class="col-harga col-xxl-2 col-lg-3 col-sm-6 col-7 ps-0 pe-0 me-5 overflow-hidden"
            style="
              border-radius: 8px;
              box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
              background: rgb(34, 122, 255);
              background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%);
            "
          >
            <div class="row bg-white pt-5 text-center" style="padding-bottom: 25px; border-radius: 0 0 100% 100%">
              <h2 class="fw-bold" style="color: rgb(34, 122, 255); color: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)">PREMIUM</h2>
              <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ccc" fill-opacity="1" d="M0,128L120,149.3C240,171,480,213,720,213.3C960,213,1200,171,1320,149.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
              </svg> -->
            </div>

            <div class="row text-center" style="padding-top: 25px">
              <h3 class="fs-1" style="color: white">IDR <strong>2000K</strong></h3>
            </div>
            <div class="row text-center" style="font-size: 1.2rem; color: white">
              <p>Undangan Unlimited</p>
            </div>
            <div class="row mx-auto w-75 mb-5" style="font-size: 1.5rem; color: white">
              <ul>
                <li>Countdown Timer</li>
                <li>Foto Cover</li>
                <li>Detail Jadwal Acara</li>
                <li>Google Maps</li>
                <li>Wedding Team</li>
                <li>Registry</li>
                <li>Premium Template</li>
                <li>Galeri Foto</li>
                <li>Wedding Story</li>
                <li>Wedding Video</li>
                <li>Bridesmaid and Bestmen</li>
                <li>Wedding Wish</li>
              </ul>
            </div>
            <div class="row justify-content-center mb-5" style="font-size: 1.5rem">
              <div class="col-5 p-0 m-0">
                {{-- <button
                  type="button"
                  class="btn border-0 pt-2 pb-2 text-white w-100 fs-3 fw-bolder"
                  style="border-radius: 10px; background: rgb(34, 122, 255); background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)"
                >
                  Get This
                </button> --}}
              </div>
            </div>
          </div>
          <div class="col-harga col-xxl-2 col-lg-3 col-sm-6 col-7 ps-0 pe-0 me-5 overflow-hidden" style="border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px">
            <div class="row pt-3 pb-0 text-center" style="background: rgb(34, 122, 255); background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)">
              <h2 class="text-white fw-bold">CHECK IN</h2>
              <h2 class="text-white">SYSTEM</h2>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L1440,96L1440,320L0,320Z"></path></svg>
            </div>

            <div class="row text-center" style="margin-top: -10px">
              <h3 class="fs-1">IDR <strong>3500K</strong></h3>
            </div>
            <div class="row text-center" style="font-size: 1.2rem">
              <p>Undangan Unlimited</p>
            </div>
            <div class="row mx-auto w-75 mb-5" style="font-size: 1.5rem">
              <ul>
                <li>Countdown Timer</li>
                <li>Foto Cover</li>
                <li>Detail Jadwal Acara</li>
                <li>Google Maps</li>
                <li>Wedding Team</li>
                <li>Registry</li>
                <li>Premium Template</li>
                <li>Galeri Foto</li>
                <li>Wedding Story</li>
                <li>Wedding Video</li>
                <li>Bridesmaid and Bestmen</li>
                <li>Wedding Wish</li>
                <li>QR Code Scanner</li>
                <li>Virtual Angpao</li>
                <li>Virtual Check-In</li>
                <li>Tablet & Printer</li>
              </ul>
            </div>
            <div class="row justify-content-center mb-5" style="font-size: 1.5rem">
              <div class="col-5 p-0 m-0">
                {{-- <button
                  type="button"
                  class="btn border-0 pt-2 pb-2 text-white w-100 fs-3 fw-bolder"
                  style="border-radius: 10px; background: rgb(34, 122, 255); background: linear-gradient(180deg, rgba(34, 122, 255, 1) 0%, rgba(95, 213, 251, 1) 100%)"
                >
                  Get This
                </button> --}}
              </div>
            </div>
          </div>
        </div>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Berapa lama pembuatan undangan digital?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Bagaimana cara publish undangan saya?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Bagaimana cara scan QR Code untuk buku tamu online?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Apa fungsi Undang Tamu, QR Code, Gift Registry?
                </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Apakah saya bisa menyebarkan undangan digital?
                </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Apa manfaat dashboard untuk mengedit undangan?
                </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Bagaimana cara membuat undangan digital?
                </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body fs-3">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body fs-3</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end faq content -->

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
</html>
