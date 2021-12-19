<nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color: #0199ff; z-index: 99999">
    <div class="container d-flex">
      <a class="navbar-brand ms-0" href="/" style="font-size: 3.2rem"><strong>Invita.</strong>id</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-end mx-auto list" style="font-size: 2rem">
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 home">
            <div class="row">
              <a class="nav-link text-white" aria-current="page" href="/">Home</a>
            </div>

            @if (Route::currentRouteName() == 'index') 
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif

          </li>

          
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 portfolio">
            <div class="row">
              <a class="nav-link text-white portfolio" href="/portfolio">Portfolio</a>
            </div>
            
            @if (Route::currentRouteName() == 'portfolio')
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif
            
          </li>
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 blog">
            <div class="row">
              <a class="nav-link text-white blog" href="/blog">Blog</a>
            </div>
            
            @if (Route::currentRouteName() == 'blog') 
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif
            
          </li>
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 review">
            <div class="row">
              <a class="nav-link text-white review" href="/review">Review</a>
            </div>
            
            @if (Route::currentRouteName() == 'review') 
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif
            
          </li>
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 faq">
            <div class="row">
              <a class="nav-link text-white faq" href="/faq">FAQ</a>
            </div>
            
            @if (Route::currentRouteName() == 'faq')
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif
            
          </li>

          @auth
          <li class="nav-item pe-lg-5 pe-sm-2 pe-3 order">
            <div class="row">
              <a class="nav-link text-white order" href="/order">Order</a>
            </div>

            @if (Route::currentRouteName() == 'order') 
            <div class="row">
              <div class="line" style="background-color: white; width: 100%; height: 5px; border-radius: 8px"></div>
            </div>
            @endif

          </li>
          @endauth
          <!-- <div class="container animation start-home position-absolute"></div> -->
        </ul>

        <ul class="navbar-nav align-items-end text-white">
          @auth
          <li class="nav-item dropdown" style="font-size: 1.5rem">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, {{ auth()->user()->nama_user }}
              <i class="bi bi-person-circle" style="padding-left: 15px"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="font-size: 1.5rem">
              <li><a class="dropdown-item" href="/akun">Kelola Akun</a></li>
              <li><a class="dropdown-item" href="/order">Undangan Saya</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/keluar" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item" style="color: red">Keluar</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item pe-lg-2 pe-sm-0">
            <button class="btn fw-bold" style="font-size: 1.5rem">
              <a class="nav-link active" href="/masuk"> Masuk</a>
            </button>
          </li>
          <li class="nav-item pe-lg-2 pe-sm-0">
            <button class="btn btn-light fw-bold" style="font-size: 1.5rem">
              <a class="nav-link active" href="/daftar" style="color: #0081d8">Daftar</a>
            </button>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>