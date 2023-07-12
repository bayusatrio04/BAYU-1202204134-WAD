<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Kemampuan Software WAD</title>
    <link rel="stylesheet" href="{{ asset('css.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('style.css') }}" rel="stylesheet">
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
        </div>
    </section>
    {{-- End Section Content --}}

    {{-- Section  Our Services --}}
    <section>
        <div class="px-4 pt-5 my-5 text-center ">
            <h2 class="display-4 fw-bold text-body-emphasis">Our Services</h2>
            <div class="col-lg-4 mx-auto">
              <p class="lead text-secondary">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-4">
                    <div class="card border-0" style="width:400px">
                        <img class="card-img-top" src="{{ asset('images/services 1.png') }}" alt="Card image 1" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title">Services 1</h4>
                        <p class="card-text">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
                        <h3 class="" style="color:#FF7EC4 !important;">Start From $123</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-4">
                        <div class="card border-0" style="width:400px">
                            <img class="card-img-top" src="{{ asset('images/services 2.png') }}" alt="Card image 2" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Services 2</h4>
                            <p class="card-text">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
                            <h3 class="" style="color:#FF7EC4 !important;">Start From $123</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-4">
                        <div class="card border-0" style="width:400px">
                            <img class="card-img-top" src="{{ asset('images/services 3.png') }}" alt="Card image 3" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Services 3</h4>
                            <p class="card-text">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
                            <h3 class="" style="color:#FF7EC4 !important;">Start From $123</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- End Section Our Services --}}

    {{-- Section  Testimoni --}}
    <section>
        <div class="px-4 pt-5 my-5 text-center ">
            <h2 class="display-4 fw-bold text-body-emphasis">Testimoni</h2>
            <div class="col-lg-4 mx-auto">
              <p class="lead text-secondary">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
            </div>
        </div>
        <div class="testimonials">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-4">
                            <img src="{{ asset('images/carousel 1.png') }}" class="card-img-top" alt="...">
                            <h2 class="fw-normal">Jarwo Kuat
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    4.5
                                </span>
                            </h2>
                            <p class=" text-secondary">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
                          </div>


                    </div>




                </div>
                <div class="carousel-item">
                  <div class="single-item">
                    <div class="d-flex justify-content-center">


                        <div class="col-lg-4">
                            <img src="{{ asset('images/carousel 1.png') }}" class="card-img-top" alt="...">
                            <h2 class="fw-normal">Jarwo Kuat
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    4.5
                                </span>
                            </h2>
                            <p class=" text-secondary">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p>
                          </div>
                    </div>
                  </div>
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>
                </span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                      </svg>
                </span>

                <span class="visually-hidden">Next</span>
              </button>
            </div>

        </div>

    </section>


    {{-- End Section Testimoni --}}


    {{-- Section  Contact Us --}}
    <section>
        <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <div class="px-4 pt-5 my-5">
                        <h2 class="display-4 fw-bold text-body-emphasis">Contact US</h2>
                        <div class="col-8"> <p class="text-secondary fw-semibold">Welcome to our Fashion Rental Platform, where style knows no boundaries.</p></div>

                    </div>
                    <form class="row px-4 pt-5 my-5">
                        <div class="col-md-12 mb-3">
                          <label for="inputEmail4" class="form-label">Full Name</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="John Abraham">
                        </div>
                        <div class="col-md-12">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="johnabraham@gmail.com">
                        </div>
                        <div class="col-md-12 mb-3 pt-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Messages</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="lorem ipsum dolor sit amet"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-info opacity-50 text-white fw-medium">Submit</button>
                        </div>
                      </form>
                </div>
                <style>
                    .bg-box{
                        width: 75px;
                        height: 75px;
                        background-color: rgb(172, 172, 172);
                        border-radius: 100%;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

                    }
                    .bg-box-items{
                        position: relative;
                        left: 30px;
                        top:20px;
                        opacity: 100%;
                    }
                </style>
                <div class="col-6">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Indonesia&t=&z=4&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                    <div class="row gap-0">
                        <div class="col-3">
                            <div class="bg-box">
                                <div class="bg-box-items">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mt-10" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bg-box">
                                <div class="bg-box-items">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bg-box">
                                <div class="bg-box-items">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bg-box">
                                <div class="bg-box-items">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Contact Us --}}

    {{-- Section  Footer --}}
    <footer class="mt-5 pt-5">
        <div class="bg-info opacity-50">
            <div class="container-xl">
                <div class="row">
                    <div class="col-10">
                        <h1 class="text-white" style="margin-top:75px;">WAD 2023</h1>
                    </div>
                    <div class="col-2">
                        <div class="text-white mt-5">
                            <p>Nama : Bayu Satrio</p>
                            <p>Nim  : 1202204134</p>
                            <p>Kode Asprak : BYST</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Section Footer --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>
