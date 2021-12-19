<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review | Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/review.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c72f5c74a5.js" crossorigin="anonymous"></script>
  
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
    <a href="/order"><button class="btn fs-2 mt-5" style="color : #0199FF"><i class="bi bi-arrow-left"></i> Kembali</button></a>
    <div class="row mt-5">
      <div class="col-10">
        <h1 class="fs-1 fw-bold" style="color : #0199FF">Beri Review</h1>
        <h3 class="mb-5">Undangan Ulang Tahun {{ $data[0]['details'][0]['nama_ulangtahun'] }}</h3>
      </div>
    </div>
    
    <form action="/order/undangan/ulangtahun/review/{{ $data[0]['_id'] }}" method="post">
      @csrf
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Nama</p>
        </div>
        <div class="col-5">
            <input type="text" class="form-control input-ubah fs-3 " placeholder="Nama" aria-label="Username" name="nama_lengkap" id="nama_lengkap">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2 fs-3 fw-bold">
            <p>Review</p>
        </div>
        <div class="col-5">
            <textarea type="text" class="form-control input-ubah fs-3 " style="height: 20vh" placeholder="Tulis review di sini..." aria-label="Username" aria-describedby="" name="review" id="review"></textarea>
        </div>
    </div>
    <div class="row mt-4">
      <div class="col-2 fs-3 fw-bold">
          <p>Rating</p>
      </div>
      <div class="col-5" id="#addStar">
        <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label>
      </div>
  </div>
    <div class="row mt-4 btn-form-ubah">
        <div class="col-7 fs-3 fw-bold text-end justify-content-end">
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

  {{-- <script>
    $('#addStar').change('.star', function(e) {
    $(this).submit();
    });
  </script> --}}

</html>
