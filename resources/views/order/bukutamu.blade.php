<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Buku Tamu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/akun.css" />
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
        <a href="/order"><button class="btn fs-2 mt-5" style="color : #0199FF"><i class="bi bi-arrow-left"></i> Kembali</button></a>
        <div class="row mt-5 mb-5">
            <div class="col-10">
                <h1 class="fs-1 fw-bold" style="color : #0199FF">Laporan Buku Tamu</h1>
            </div>
        </div>
        <div class="d-inline mt-5 mb-3">
            <a class="fs-3" href="">Lihat QR Code Saya</a>
            <a class="fs-3 text-danger ms-5" href="">Export</a>
        </div>
        <div class="row mt-5">
            <table class="table fs-3">
                <thead class="text-center fw-bold border-0" style="background-color: #0199FF">
                    <tr>
                        <td>No.</td>
                        <td>Nama Tamu</td>
                        <td>No. Telp</td>
                        <td>Kehadiran</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class=>
                        <td>1.</td>
                        <td>Rosa Amalia</td>
                        <td>08123456789</td>
                        <td class="text-success fw-bold">Bisa Hadir</td>
                        {{-- <td class="text-danger fw-bold">Tidak Bisa</td> --}}
                        <td>
                            <button type="button" class="btn btn-danger fs-3">Hapus</button>
                        </td>
                    </tr>
                    <tr class=>
                        <td>2.</td>
                        <td>M.Bagus Istighfar</td>
                        <td>08987654321</td>
                        <td class="text-success fw-bold">Bisa Hadir</td>
                        {{-- <td class="text-danger fw-bold">Tidak Bisa</td> --}}
                        <td>
                            <button type="button" class="btn btn-danger fs-3">Hapus</button>
                        </td>
                    </tr>
                    <tr class=>
                        <td>3.</td>
                        <td>Dido Fabian Fayed</td>
                        <td>0890127489</td>
                        {{-- <td class="text-success fw-bold">Bisa Hadir</td> --}}
                        <td class="text-danger fw-bold">Tidak Bisa</td>
                        <td>
                            <button type="button" class="btn btn-danger fs-3">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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

</html>
