<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/daftar.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    @include('components.fonts')
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- navbar -->
    @include('components/navbar')
    <!-- end navbar -->

    <!-- Login -->
    <div class="container-fluid" style="padding-top: 150px; padding-bottom: 150px">
      <div class="container">
        <div class="row">
          <div class="col-6 d-md-block d-none text-center">
            <img class="img-fluid" src="img/phone-daftar-masuk.png" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 col-sm-12 text-center d-flex flex-column">
            <div class="row">
              <h1 class="text-white" style="font-size: 5rem"><strong>Invita.</strong>id</h1>
            </div>
            {{-- <div class="row justify-content-center mt-5 pt-4">
              <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                <button type="button" class="btn text-start text-black fs-3 w-100" style="padding-left: 60px; color: #ccc">Daftar dengan google</button>
                <span class="icon-form bi bi-google fs-1 ps-3 pe-3 pt-1 position-absolute" style="top: 0; left: 0; height: 100%"></span>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 fs-2" style="color: rgb(255, 255, 255)"><p>atau</p></div>
            </div> --}}
            <form action="/daftar" method="POST">
              @csrf
              <div class="row justify-content-center mt-3">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input type="text" id="nama-lengkap" name="nama-lengkap" class="form-control text-start text-black fs-3 w-100 border-0 @error('nama-lengkap') is-invalid @enderror" style="padding-left: 60px; color: #ccc; border-radius: 10px" placeholder="Nama Lengkap" value="{{ old('nama-lengkap') }}"/>
                  <span class="icon-form material-icons fs-1 ps-3 pe-3 pt-3 position-absolute" style="top: 0; left: 0; height: 100%"> badge </span>
                  @error('nama-lengkap')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-3">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input type="text" id="username" name="username" class="form-control text-start text-black fs-3 w-100 border-0 @error('username') is-invalid @enderror" style="padding-left: 60px; color: #ccc; border-radius: 10px" placeholder="Username" value="{{ old('username') }}"/>
                  <span class="icon-form material-icons fs-1 ps-3 pe-3 pt-3 position-absolute" style="top: 0; left: 0; height: 100%"> badge </span>

                  @error('username')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-3">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input type="email" id="email" name="email" class="form-control text-start text-black fs-3 w-100 border-0 @error('email') is-invalid @enderror" style="padding-left: 60px; color: #ccc; border-radius: 10px" placeholder="Email" value="{{ old('email') }}"/>
                  <i class="icon-form bi bi-envelope-fill fs-1 ps-3 pe-3 pt-1 position-absolute" style="top: 0; left: 0; height: 100%"></i>
                  @error('email')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-3">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input type="tel" id="telepon" name="telepon" class="form-control text-start text-black fs-3 w-100 border-0 @error('telepon') is-invalid @enderror" style="padding-left: 60px; color: #ccc; border-radius: 10px" placeholder="Nomor Handphone" value="{{ old('telepon') }}"/>
                  <i class="icon-form bi bi-telephone-fill fs-1 ps-3 pe-3 pt-1 position-absolute" style="top: 0; left: 0; height: 100%"></i>
                  @error('telepon')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-4">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input type="password" id="password" name="password" class="form-control text-start text-black fs-3 w-100 border-0 @error('password') is-invalid @enderror" placeholder="Kata Sandi" style="padding-left: 60px; color: #ccc; border-radius: 10px"/>
                  <i class="icon-form bi bi-key-fill fs-1 ps-3 pe-3 pt-1 position-absolute" style="top: 0; left: 0; height: 100%"></i>
                  @error('password')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-4">
                <div class="col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 bg-white pt-2 pb-2 position-relative" style="border-radius: 10px">
                  <input
                    type="password"
                    id="confirm-pass"
                    name="confirm-password"
                    class="form-control text-start text-black fs-3 w-100 border-0 @error('confirm-password') is-invalid @enderror"
                    placeholder="Konfirmasi Kata Sandi"
                    style="padding-left: 60px; color: #ccc; border-radius: 10px"
                  />
                  <i class="icon-form bi bi-key-fill fs-1 ps-3 pe-3 pt-1 position-absolute" style="top: 0; left: 0; height: 100%"></i>
                  @error('confirm-password')
                  <div class="invalid-feedback text-start fs-5 w-100" style="padding-left: 60px;">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-center mt-5 pt-3">
                <div class="col-12" style="border-radius: 10px">
                  <button type="submit" class="btn text-center text-white fw-normal ps-4 pe-4 fs-3 pt-2 pb-2" style="background-color: #044581">Daftar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login -->
  </body>
</html>
