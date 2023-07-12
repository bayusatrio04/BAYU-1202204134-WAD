<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Kemampuan Software WAD</title>
    <link rel="stylesheet" href="{{ asset('css.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    {{-- Navbar Main --}}
    <nav class="navbar navbar-expand-lg bg-transparent rounded" aria-label="Thirteenth navbar example">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">

          <a class="navbar-brand col-lg-3 me-0 fw-bold" href="#">
            <span class="" style="color: #FF7EC4 !important;">WAD</span><span>.CO</span>
          </a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center text-uppercase fw-medium gap-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact US</a>
            </li>

          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end gap-3 ">
            <button type="button" class="btn btn-outline-dark text-uppercase fw-medium">login</button>
            <button type="button" class="btn btn-info text-uppercase text-white fw-medium opacity-50">register</button>
          </div>
        </div>
      </div>
    </nav>
    {{-- End Navbar Main --}}

    {{-- Section Content --}}
    <section>
        <div class="container-xl ">
            <div class="row d-flex align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="col-6">
                        <h1 class=" fw-bold text-body-emphasis lh-5 mb-3">Unleash Your Style, Rent Your Fashion.</h1>
                    </div>
                    <div class="col-8">
                        <p class="lead">Welcome to our Fashion Rental Platform, where style knows no boundaries. Discover a world of endless possibillities as you explore.</p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-info btn-lg px-4 me-md-2 text-white opacity-50">Get Started </button>
                        <button type="button" class="btn btn-lg px-4 bg-transparent text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                            </svg>
                            Watch Trailer</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/section-1.png') }}" class="d-block mx-lg-auto img-fluid" width="600">
                </div>


            </div>
            {{-- <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('images/section-1.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class=" fw-bold text-body-emphasis lh-5 mb-3">Unleash Your Style, Rent Your Fashion.</h1>
                <p class="lead">Welcome to our Fashion Rental Platform, where style knows no boundaries. Discover a world of endless possibillities as you explore.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
              </div>
            </div> --}}
        </div>
    </section>
    {{-- End Section Content --}}

    {{-- Section  Our Services --}}
    <section>

    </section>
    {{-- End Section Our Services --}}

    {{-- Section  Testimoni --}}
    <section>

    </section>
    {{-- End Section Testimoni --}}


    {{-- Section  Contact Us --}}
    <section>

    </section>
    {{-- End Section Contact Us --}}

    {{-- Section  Footer --}}
    <section>

    </section>
    {{-- End Section Footer --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>
