<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Edit Data Undangan | Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/order-edit.css" />
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

<main style="background: #fafafa;">

  <a style="margin-left: 50px; padding-top: 30px; display: flex; flex-direction: row; align-items: center; text-decoration: none" href="/order/undangan/ulangtahun/{{ $undangan[0]['_id'] }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
    </svg>
    <p style="font-size: 20px; padding-top: 10px; margin-left: 10px">Kembali</p>
  </a>

  <div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="/order/undangan/ulangtahun/{{ $undangan[0]['_id'] }}/edit" method="post">
              @csrf
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	  <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                      <p style="position: absolute; z-index: 10; padding-left: 15px; padding-top: 5px; font-weight:700; color: white">1</p>
			            	<span class="step-text">Edit Profil</span>
			            </h2>
			            <section>
                    <div class="inner">
                      <p style="color: #044581; font-weight:700; font-size: 20px">Profil</p>
                    <div class="form-row">
                      <div class="form-holder" style="width: 300px">
                        <label for="honorific">Nama Anda:</label>
                        <select name="honorific" id="honorific" class="form-control">
                          <option value="{{ $detail[0]['honorific_ulangtahun'] }}" selected>{{ $detail[0]['honorific_ulangtahun'] }}</option>
                          <option value="Mr">Mr.</option>
                          <option value="Ms">Ms.</option>
                          <option value="Mrs">Mrs.</option>
                        </select>
                      </div>
                      <div class="form-holder" style="width: 100%">
                        <label for="nama-lengkap" style="display: hidden; color: white">Label</label>
                        <input type="text" placeholder="Tulis nama Anda" class="form-control input-step-2" id="nama-lengkap" name="nama-lengkap" value="{{ $detail[0]['nama_ulangtahun'] }}">
                        <span><i class="zmdi zmdi-search"></i></span>
                      </div>
                    </div>
                    <div class="form-row" style="width: 300px">
                      <div class="form-holder form-holder-2">
                        <label for="tanggal-lahir">Kapan Ulang tahun Anda?</label>
                        <input type="date" name="tanggal-lahir" class="email input-step-2-1" id="tanggal-lahir" value="{{ $detail[0]['tanggal_lahir_ulangtahun'] }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-holder form-holder-2">
                        <input type="text" name="deskripsi" class="email input-step-2-1" id="deskripsi" placeholder="Isi biodata Anda semenarik mungkin..." value="{{ $detail[0]['deskripsi_ulangtahun'] }}">
                      </div>
                    </div>
                  </div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                    <p style="position: absolute; z-index: 10; padding-left: 15px; padding-top: 5px; font-weight:700; color: white">2</p>
			            	<span class="step-text">Edit Jadwal dan Lokasi</span>
			            </h2>
			            <section>
                    <div class="inner">
                      <p style="color: #044581; font-weight:700; font-size: 20px">Jadwal dan Lokasi</p>
                      
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="tanggal-mulai">Tanggal Mulai</label>
                          <input type="date" name="tanggal-mulai" class="email input-step-2-1" id="tanggal-mulai" value="{{ $undangan[0]['tanggal_mulai_acara'] }}">
                        </div>
                        <div class="form-holder form-holder-2">
                          <label for="tanggal-berakhir">Tanggal Berakhir</label>
                          <input type="date" name="tanggal-berakhir" class="email input-step-2-1" id="tanggal-berakhir" value="{{ $undangan[0]['tanggal_berakhir_acara'] }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="waktu-mulai">Waktu Mulai</label>
                          <input type="time" name="waktu-mulai" class="email input-step-2-1" id="waktu-mulai" value="{{ $undangan[0]['waktu_mulai_acara'] }}">
                        </div>
                        <div class="form-holder form-holder-2">
                          <label for="waktu-berakhir">Waktu Berakhir</label>
                          <input type="time" name="waktu-berakhir" class="email input-step-2-1" id="waktu-berakhir" value="{{ $undangan[0]['waktu_berakhir_acara'] }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="lokasi">Lokasi Acara:</label>
                          <input type="text" placeholder="Masukkan lokasi venue" class="form-control input-step-2" id="lokasi" name="lokasi" value="{{ $undangan[0]['lokasi_acara'] }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="alamat">Alamat:</label>
                          <input type="text" placeholder="Masukkan alamat" class="form-control input-step-2" id="alamat" name="alamat" value="{{ $undangan[0]['alamat_acara'] }}">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary border-0 px-5" style="background-color: #0199FF; font-size: 18px">Edit Data Undangan</button>
                    </div>
			            </section>
			            <!-- SECTION 3 -->
			            
                </div>
		        </form>
			</div>
		</div>
	</div>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/jquery.steps.js"></script>
	<script src="/js/main.js"></script>

</main>


      
  </body>
</html>

