<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/order-pembayaran.css" />
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

    
    <!-- pembayaran -->
    <div class="container mb-5 pb-5 mt-5 pt-5">
        <div class="row text-center fs-1">
            <p style="color: #0199FF"><Strong>Pesan </Strong>Undangan</p>
        </div>

        <form action="/order/undangan/pembayaran/{{ $data[0]['_id'] }}" method="POST">

        @csrf
        @method('patch')
        <div class="row">
            <p class="fs-2" style="color: #044581"><strong>Detail Pesanan</strong></p>
        </div>
        <div class="row">
          @if ($data[0]['jenis_undangan'] == 'ulang tahun') 
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="w-100" src="https://images.unsplash.com/photo-1531956531700-dc0ee0f1f9a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="height:120px ;object-fit: cover"/>
            </div>
            <div class="col-9">
              @if ($data[0]['tema_undangan'] == 'basic')
                <p class="mt-3">Undangan Basic</p>
              @else
                <p class="mt-3">Undangan Premium</p>
              @endif

              <p class="" style="margin-top : -10px">#004</p>
              <p class="mt-4 fs-4 fw-bold">Ulang Tahun {{ $data[0]['details'][0]['nama_ulangtahun'] }}</p>
              
              @if ($data[0]['tema_undangan'] == 'basic')
                <p class="" style="color : #0199FF; margin-top : -10px">IDR 195.000,-</p>
              @else
                <p class="" style="color : #0199FF; margin-top : -10px">IDR 2.000,000,-</p>
              @endif
            </div>
          </div>

          @else
              
          <div class="row list-portfolio" style="background-color: #f9f9f9">
            <div class="col-3 img-port bg-success p-0" style="">
              <img class="w-100" src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="height:120px ;object-fit: cover"/>
            </div>
            <div class="col-9">
              @if ($data[0]['tema_undangan'] == 'basic')
                <p class="mt-3">Undangan Basic</p>
              @else
                <p class="mt-3">Undangan Premium</p>
              @endif

              <p class="" style="margin-top : -10px">#004</p>
              <p class="mt-4 fs-4 fw-bold">Pernikahan {{ $data[0]['details'][0]['nama_mempelai_lk'] }} dan {{ $data[0]['details'][0]['nama_mempelai_pr'] }}</p>
              
              @if ($data[0]['tema_undangan'] == 'basic')
                <p class="" style="color : #0199FF; margin-top : -10px">IDR 195.000,-</p>
              @else
                <p class="" style="color : #0199FF; margin-top : -10px">IDR 2.000,000,-</p>
              @endif
            </div>
          </div>
          @endif
            
            
        </div>
        <div class="row mt-5 pt-5">
            <h2 class="fs-3 fw-light" style="color : #044581">Step 1</h2>
            <h3 class="fs-2" style="color : #044581"><strong>Masukkan Kode Kupon</strong></h3>
            <p class="fs-4 mt-4"><strong>Punya kupon? Silahkan masukkan kupon anda.</strong></p>
            <p class="fs-5" style="color : #B5B5B5">Cek kode kupon, promo diskon dan berbagai penawaran khusus melalui media sosial <a href="#" style="color : #0199FF">Invita.id</a></p>
        </div>
        <div class="row">
            <div class="col-4 d-block">
                <input type="text" class="form-control text-center text-black fs-3" placeholder="Masukkan kode kupon" aria-label="Kode Kupon" id="kupon" name="kupon">
            </div>
            <div class="col-1">
                <button type="button" class="btn button border-none text-white fs-3 px-5" style="background-color : #0199FF; border-radius : 5px">OK</button>
            </div>
        </div>
        <div class="mt-5">
            <input class="form-check-input px-3 fs-3 d-inline" type="checkbox" value="" style="">
            <p class="fs-4 d-inline ps-3">Saya tidak memiliki kode kupon</p>
        </div>
        <div class="row mt-5 pt-5">
            <h2 class="fs-3 fw-light" style="color : #044581">Step 2</h2>
            <h3 class="fs-2" style="color : #044581"><strong>Pilih Metode Pembayaran</strong></h3>
        </div>
        <div class="row mt-5">
            <div class="col-4 border-1 border rounded-3 py-3 fs-3">
                <input class="form-check-input mt-2 me-3" type="radio" id="atm" name="metode-pembayaran" value="ATM Transfer" aria-label="1">
                <strong>ATM Transfer</strong>
            </div>
            <div class="col-4 border-1 border rounded-3 ms-5 py-3 fs-3">
                <input class="form-check-input mt-2 me-3" type="radio" id="kartu" name="metode-pembayaran" value="Kartu Debit / Kredit Online" aria-label="2">
                <strong>Kartu Debit / Kredit Online</strong>
            </div>
        </div>
        <div class="row my-5 pb-5">
            <div class="col-4 border-1 border rounded-3 py-3 fs-3">
                <input class="form-check-input mt-2 me-3" type="radio" id="e-banking" name="metode-pembayaran" value="Bank Transfer (Verifikasi Otomatis)" aria-label="3">
                <strong>Bank Transfer (Verifikasi Otomatis)</strong>
            </div>
            <div class="col-4 border-1 border rounded-3 ms-5 py-3 fs-3">
                <input class="form-check-input mt-2 me-3" type="radio" id="ovo" name="metode-pembayaran" value="OVO" aria-label="4">
                <strong>OVO</strong>
            </div>
        </div>
        <div class="row mt-5 pt-5 d-flex ">
            <div class="col-2 ms-auto">
                <p class="fs-3 fw-bolder style="color : #044581"><strong>Total Tagihan</strong></p> 
                  @if ($data[0]['tema_undangan'] == 'basic')
                    <p class="fs-4 fw-bolder" style="color : #DF3C4F; margin-top : -5px"><strong>IDR 195.000,-</strong></p>
                    <input type="hidden" id="harga" name="harga" value="195000">
                  @else
                    <p class="fs-4 fw-bolder" style="color : #DF3C4F; margin-top : -5px"><strong>IDR 2.000.000,-</strong></p>
                    <input type="hidden" id="harga" name="harga" value="2000000">
                  @endif
            </div>
            <div class="col-1  ">
              @if ($data[0]['jenis_undangan'] == 'ulang tahun')
                  
              <a
              href="/order/undangan/ulangtahun/{{ $data[0]['_id'] }}"
              class="btn button border-0 py-3 bg-danger text-white w-100 fs-3 fw-bolder"
              style="border-radius: 10px; "
              >
              Batal
              </a>

              @else
                  
              <a
              href="/order/undangan/pernikahan/{{ $data[0]['_id'] }}"
              class="btn button border-0 py-3 bg-danger text-white w-100 fs-3 fw-bolder"
              style="border-radius: 10px; "
              >
              Batal
              </a>
              @endif

            </div>
            <div class="col-3 ">
                <button
                type="submit"
                class="btn button border-0 py-3 text-white w-100 fs-3 fw-bolder"
                style="border-radius: 10px; background: #0199FF;"
                >
                Buat Undangan
            </button>
            </div>
          </form>
        </div>
    </div>
    <!-- end blog -->

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
