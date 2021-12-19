<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Akun | Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/akun.css" />
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
    <main style="padding-bottom: 20vh">
    <!-- data akun -->
    <div class="container">
    <a href="/"><button class="btn fs-2 mt-5" style="color : #0199FF"><i class="bi bi-arrow-left"></i> Kembali</button></a>
    <div class="row mt-5">
      <div class="col-10">
        <h1 class="fs-1 fw-bold" style="color : #0199FF">Kelola Akun</h1>
      </div>
      <div class="col-2">
        <button class="btn button btn-ubah text-white fs-3 ps-4 pe-4" style="background-color: #0199FF">Ubah</button>
      </div>
    </div>

    @if(session()->has('sukses'))
      <div class="row align-items-start" style="width: 100%">
        <div class="alert alert-success alert-dismissible fade show col-xxl-7 col-xl-8 col-lg-10 col-sm-11 col-11 fs-3" role="alert">
          {{ session('sukses') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif
    
    <form action="/akun" method="post">
      @csrf
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Nama</p>
        </div>
        <div class="col-5">
            <p class="fs-3 p-ubah">{{ $data['nama_user'] }}</p>
            <input type="text" class="form-control input-ubah fs-3 " placeholder="Nama" aria-label="Username" name="nama_lengkap" id="nama_lengkap" value="{{ $data['nama_user'] }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Username</p>
        </div>
        <div class="col-5">
            <p class="fs-3 p-ubah">{{ $data['username'] }}</p>
            <input type="text" class="form-control input-ubah fs-3 " placeholder="Username" aria-label="Username" aria-describedby="" name="username" id="username" value="{{ $data['username'] }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Email</p>
        </div>
        <div class="col-5">
            <p class="fs-3 p-ubah">{{ $data['email'] }}</p>
            <input type="email" class="form-control input-ubah fs-3 " placeholder="Email" aria-label="" aria-describedby="" name="email" id="email" value="{{ $data['email'] }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Nomor Telepon</p>
        </div>
        <div class="col-5">
            <p class="fs-3 p-ubah">{{ $data['telepon_user'] }}</p>
            <input type="text" class="form-control input-ubah fs-3 " placeholder="Nomor Telepon" aria-label="Username" aria-describedby="" name="telepon" id="telepon" value="{{ $data['telepon_user'] }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Tanggal Lahir</p>
        </div>
        <div class="col-5">
            @if ($data['tanggal_lahir_user'] == null)
            <p class="fs-3 p-ubah" style="opacity: 0.5">Tanggal lahir belum diatur</p>  
            @else 
              <p class="fs-3 p-ubah">{{ $data['tanggal_lahir_user'] }}</p>
            @endif
            <input type="date" class="form-control input-ubah fs-3 " placeholder="dd-mm-yy" aria-label="Username" aria-describedby="" name="tanggal_lahir" id="tanggal_lahir" value="{{ $data['tanggal_lahir_user'] }}">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Jenis Kelamin</p>
        </div>
        <div class="col-5">
            @if ($data['jenis_kelamin_user'] == null)
            <p class="fs-3 p-ubah" style="opacity: 0.5">Jenis Kelamin belum diatur</p>  
            @else 
              <p class="fs-3 p-ubah">{{ $data['jenis_kelamin_user'] }}</p>
            @endif
            <select class="form-select input-ubah fs-3 " aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                <option value="{{ $data['jenis_kelamin_user'] }}"selected>@if($data['jenis_kelamin_user'] == null) Pilih Jenis Kelamin @else {{ $data['jenis_kelamin_user'] }} @endif</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="row mt-4 btn-form-ubah">
        <div class="col-7 fs-3 fw-bold text-end justify-content-end">
          <button class="btn button btn-batal  fs-3 ps-5 pe-5 fw-bold" style="">Batal</button>
          <button class="btn button btn-simpan text-white fs-3 ps-4 pe-4 fw-bold" type="submit" style="background-color: #0199FF">Simpan</button>
        </div>
    </div>
  </form>
    </div>
  </main>
    <!-- end data akun -->

    <!-- footer -->
    <div class="container-fluid footer position-absolute" style="background-color: #4daae9; width:100%; bottom : 0">
      <div class="container d-flex p-3 ">
        <a href="#" class="me-auto p-2 text-decoration-none text-white fs-4">©Copyright Invita.id 2021</a>
        <a href="#" class="p-2 me-5 text-decoration-none text-white fs-4">Privacy Policy</a>
        <a href="#" class="p-2 text-decoration-none text-white fs-4">Terms & Conditions</a>
      </div>
    </div>
    <!-- end footer -->
  </body>

  <script>
    $(document).ready(function(){
          $(".btn-batal").hide();
          $(".btn-simpan").hide();
          $(".input-ubah").hide();
        
          $(".btn-ubah").click(function(){
            $(".btn-ubah").hide();
            $(".p-ubah").hide(); 

            $(".btn-batal").show();
            $(".btn-simpan").show(); 
            $(".input-ubah").show(); 
          });

        $(".btn-batal").click(function(){
          $(".btn-batal").hide();
          $(".btn-simpan").hide();
          $(".input-ubah").hide();

          $(".btn-ubah").show();
          $(".p-ubah").show();
        });

        $(".btn-simpan").click(function(){
          $(".btn-batal").hide();
          $(".btn-simpan").hide();
          $(".input-ubah").hide();

          $(".btn-ubah").show();
          $(".p-ubah").show();
        });
        // var name = $("#jenis-kegiatan").val();
        // $(".row-portfolio").css("display", "none");
        // $("."+name).css("display", "flex");
      })
  </script>
</html>
