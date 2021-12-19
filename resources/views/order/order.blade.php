<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Undangan Saya | Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/modal.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    @include('components.fonts')
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
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
  <body>

  <!-- navbar -->
  @include('components/navbar')
  <!-- end navbar -->

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-9 col-md-8 mx-auto my-5">
        <h1 class="fw-normal" style="color: #0199ff; font-size: 32px;"><strong>Pesan</strong> Sekarang</h1>
        <p class="lead text-muted" style="font-size: 14px;">Buat Undangan Digital Anda sekarang. Baik undangan pernikahan, undangan ulang tahun, atau undangan untuk kegiatan lain! Buat undangan yang memudahkan anda untuk berbagi informasi kepada tamu anda dan tentunya ramah lingkungan.</p>
        <p>
          <a  class="pesan btn btn-primary m-2 px-5 shadow border-0" style="background: white; color:#0199ff;font-size: 16px;" data-bs-toggle="modal" data-bs-target="#modalTour">Buat Undangan</a>
          <a href="/order/harga" class="btn btn-primary m-2 px-5 shadow border-0" style="background: #0199ff; color: white;font-size: 16px;">Lihat Daftar Harga</a>
        </p>
      </div>
    </div>
  </section>


  <div class="album py-5 bg-light">
      <h1 class="fw-normal pb-5" style="color: #0199ff; font-size: 32px; padding-left: 90px">Undangan Saya</h1>

    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="min-height: 15vh">
  
        @foreach ($data as $item)
        @if ($item['jenis_undangan'] == 'pernikahan')
          <div class="col">
            <div class="card shadow-sm" style="height: 350px">
              <img class="bd-placeholder-img card-img-top" src="https://images.unsplash.com/photo-1550005809-91ad75fb315f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" style="height: 220px; object-fit:cover">

              <div class="card-body d-flex flex-column justify-content-center align-items-center" style="font-size: 16px">
                <p class="card-text" style="text-align: center">Pernikahan <strong>{{ $item['details'][0]['nama_mempelai_lk'] }} dan {{ $item['details'][0]['nama_mempelai_pr'] }}</strong></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary px-3" href="/order/undangan/pernikahan/{{ $item['_id'] }}" style="font-size: 14px">Lihat Detail</a>
                    <a type="button" class="btn btn-sm btn-outline-secondary px-3" id="review" href="/order/undangan/pernikahan/review/{{ $item['_id'] }}" style="font-size: 14px">Beri Review</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @else   
        <div class="col">
          <div class="card shadow-sm" style="height: 350px">
            <img class="bd-placeholder-img card-img-top" src="https://images.unsplash.com/photo-1531956531700-dc0ee0f1f9a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="height: 220px; object-fit:cover">
            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}

            <div class="card-body d-flex flex-column justify-content-center align-items-center" style="font-size: 16px">
              <p class="card-text" style="text-align: center">Ulang Tahun <strong>{{ $item['details'][0]['nama_ulangtahun'] }}</strong> 🎈</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary px-3" href="/order/undangan/ulangtahun/{{ $item['_id'] }}" style="font-size: 14px">Lihat Detail</a>
                  <a type="button" class="btn btn-sm btn-outline-secondary px-3" id="review" href="/order/undangan/ulangtahun/review/{{ $item['_id'] }}" style="font-size: 14px">Beri Review</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach

      </div>
    </div>
  </div>

  {{-- modal --}}
  <div class="modal fs-2 justify-content-center" tabindex="-1" role="dialog" id="modalTour" aria-hidden="true" style="margin-top: 15vh;">
    <div class="modal-dialog p-0" role="document">
      <div class="modal-content rounded-6 shadow">
        <div>
        <button type="button" class="btn" data-bs-dismiss="modal">
          <p class="fs-1">&times;</p>
        </button>
        </div>
        <div class="modal-body p-5 pt-0 d-flex justify-content-center flex-column">
          <h2 class="fw-bold mb-0 text-align-center" style="text-align: center">Tentukan Acaramu</h2>
  
          <ul class="d-grid gap-4 my-5 list-unstyled">
            <li class="d-flex gap-4 align-items-center shadow" style="border: 1px solid #0199ff; padding: 8px; border-radius: 10px">
              <img src="/img/i-pernikahan.png" style="height: 60px; width: 60px" alt="">
                <a href="/order/buat/pernikahan" style="text-decoration: none">
                  <h5 class="mb-0">Undangan</h5>
                  <p class="mb-0" style="color: #0199ff; font-weight: 600">Pernikahan</p>
                </a>
            </li>
            <li class="d-flex gap-4 align-items-center shadow" style="border: 1px solid #0199ff; padding: 8px; border-radius: 10px">
              <img src="/img/i-ultah.png" style="height: 60px; width: 60px" alt="">
                <a href="/order/buat/ulangtahun" style="text-decoration: none">
                  <h5 class="mb-0">Undangan</h5>
                  <p class="mb-0" style="color: #0199ff; font-weight: 600">Ulang Tahun</p>
                </a>
            </li>
            <li class="d-flex gap-4 align-items-center shadow" style="border: 1px solid #0199ff; padding: 8px; border-radius: 10px">
              <img src="/img/i-lainnya.png" style="height: 60px; width: 60px" alt="">
                <a href="#" style="text-decoration: none">
                  <h5 class="mb-0">Undangan</h5>
                  <p class="mb-0" style="color: #0199ff; font-weight: 600">Lainnya</p>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</main>

  <!-- footer -->
  @include('components/footer')
  <!-- end footer -->

  <script>
    $(document).ready(function(){
        $(".pesan").click(function(){
            $("#modalTour").modal('show');
        });
    });
  </script>
      
  </body>
</html>

