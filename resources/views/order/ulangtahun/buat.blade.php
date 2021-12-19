<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Buat Undangan | Invita.id</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- css -->
    <link rel="stylesheet" href="/css/order-buat.css" />
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

  <div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="/order/buat/ulangtahun" method="post">
              @csrf
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	  <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                      <p style="position: absolute; z-index: 10; padding-left: 15px; padding-top: 5px; font-weight:700; color: white">1</p>
			            	<span class="step-text">Pilih Tema Undangan</span>
			            </h2>
			            <section>
			                <div class="inner">
                        <h4 style="color: #044581">Step 1</h4>
                        <p style="color: #044581; font-weight:700; font-size: 20px">Pilih Tema Undangan Ulang Tahun</p>
                        <div class="form-row">
                          <div id="radio" style="font-size: 16px">
                              <input class="me-3" type="radio" name="jenis" value="basic">
                              <strong class="">Basic</strong> 
                              <span class="me-5">- Mulai dari IDR 195.000</span> 
                              <input class="me-3" type="radio" name="jenis" value="premium"><strong>Premium</strong> - Mulai dari IDR 2.000.000
                          </div>
                        </div>

                        <div class="form-row my-3">
                          <img src="https://images.unsplash.com/photo-1531956531700-dc0ee0f1f9a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid" style="width: 100%; height: 150px; object-fit: cover; padding: 0 10px"></img>
                          <img src="https://images.unsplash.com/photo-1531956531700-dc0ee0f1f9a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid" style="width: 100%; height: 150px; object-fit: cover; padding: 0 10px"></img>
                        </div>
                    </div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                    <p style="position: absolute; z-index: 10; padding-left: 15px; padding-top: 5px; font-weight:700; color: white">2</p>
			            	<span class="step-text">Lengkapi Profil</span>
			            </h2>
			            <section>
			                <div class="inner">
                        <h4 style="color: #044581">Step 2</h4>
                        <p style="color: #044581; font-weight:700; font-size: 20px">Profil</p>
                      <div class="form-row">
                        <div class="form-holder" style="width: 300px">
                          <label for="honorific">Nama Anda:</label>
                          <select name="honorific" id="honorific" class="form-control">
                            <option value="mr" selected>Mr.</option>
                            <option value="ms">Ms.</option>
                            <option value="mrs">Mrs.</option>
                          </select>
                        </div>
                        <div class="form-holder" style="width: 100%">
                          <label for="nama-lengkap" style="display: hidden; color: white">Label</label>
                          <input type="text" placeholder="Tulis nama Anda" class="form-control input-step-2" id="nama-lengkap" name="nama-lengkap">
                          <span><i class="zmdi zmdi-search"></i></span>
                        </div>
                      </div>
                      <div class="form-row" style="width: 300px">
                        <div class="form-holder form-holder-2">
                          <label for="tanggal-lahir">Kapan Ulang tahun Anda?</label>
                          <input type="date" name="tanggal-lahir" class="email input-step-2-1" id="tanggal-lahir">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <input type="text" name="deskripsi" class="email input-step-2-1" id="deskripsi" placeholder="Isi biodata Anda semenarik mungkin...">
                        </div>
                      </div>
                    </div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                    <p style="position: absolute; z-index: 10; padding-left: 15px; padding-top: 5px; font-weight:700; color: white">3</p>
			            	<span class="step-text">Tentukan Jadwal dan Lokasi</span>
			            </h2>
			            <section style="padding: 10px 40px">
			                <div class="inner">
			                	<h4 style="color: #044581">Step 3</h4>
                        <p style="color: #044581; font-weight:700; font-size: 20px">Jadwal dan Lokasi</p>
                        
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="tanggal-mulai">Tanggal Mulai</label>
                            <input type="date" name="tanggal-mulai" class="email input-step-2-1" id="tanggal-mulai">
                          </div>
                          <div class="form-holder form-holder-2">
                            <label for="tanggal-berakhir">Tanggal Berakhir</label>
                            <input type="date" name="tanggal-berakhir" class="email input-step-2-1" id="tanggal-berakhir">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="waktu-mulai">Waktu Mulai</label>
                            <input type="time" name="waktu-mulai" class="email input-step-2-1" id="waktu-mulai">
                          </div>
                          <div class="form-holder form-holder-2">
                            <label for="waktu-berakhir">Waktu Berakhir</label>
                            <input type="time" name="waktu-berakhir" class="email input-step-2-1" id="waktu-berakhir">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="lokasi">Lokasi Acara:</label>
                            <input type="text" placeholder="Masukkan lokasi venue" class="form-control input-step-2" id="lokasi" name="lokasi">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="alamat">Alamat:</label>
                            <input type="text" placeholder="Masukkan alamat" class="form-control input-step-2" id="alamat" name="alamat">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary border-0 px-5" style="background-color: #0199FF; font-size: 18px">Buat Undangan</button>
							        </div>
			            </section>
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

