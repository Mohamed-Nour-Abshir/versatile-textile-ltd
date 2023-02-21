<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Varsatile</title>
    <link rel="shortcut icon" href="images/Logo.jpg" type="image/x-icon">

    <!-- font-awesome cdn  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- google fonts cdn  -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600"
      rel="stylesheet"
    />
    <!-- aos  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <!-- bootstrap icon  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- owl carosel  -->
    <link rel="stylesheet" href="plugins/owlcarosel/owl.carousel.min.css" />
    <link rel="stylesheet" href="plugins/owlcarosel/owl.theme.default.css" />

    <!-- custom css  -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- preloder  -->
    <div class="loader_bg">
      <div class="loader"></div>
    </div>
    <!-- PRELOEDER END  -->

    <!-- nav start  -->
    <header class="bg-my-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <!-- <div class="container-fluid"> -->
          <a class="navbar-brand" href="/"
            ><img class="logo-img" src="images/logo1.png" alt="" /></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse ms-auto"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/"
                  >Home
                  <div class="nav-line"></div
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"
                  >About
                  <div class="nav-line"></div
                ></a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Product
                </a>
                <ul class="dropdown-menu show-my my-color-hover my-color my-color-hover">
                  <li><a class="dropdown-item" href="{{route('mensItem')}}">Men's Item</a></li>
                  <li><a class="dropdown-item" href="{{route('boysItem')}}">Boy's Item</a></li>
                  <li><a class="dropdown-item" href="{{route('girlsItem')}}">Girl's Item</a></li>
                  <li><a class="dropdown-item" href="{{route('kidsItem')}}">Kid's Item </a></li>
                  <li><a class="dropdown-item" href="{{route('ladiesItem')}}">Ladies Item</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('gallery')}}"
                  >Galary
                  <div class="nav-line"></div
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('news')}}"
                  >News
                  <div class="nav-line"></div
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}"
                  >Contact Us
                  <div class="nav-line"></div
                ></a>
              </li>
              @if (Route::has('login'))
              @auth
              @if (Auth::user()->role ===1)
              <li class="nav-item navbar-start">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    {{-- <i class="fas fa-user"></i> --}}
                    Dashboard
                  <div class="nav-line"></div
                ></a>
              </li>
              @else
              <li class="nav-item navbar-start">
                <a class="nav-link" href="{{route('profile.edit')}}">
                    <i class="fas fa-user"></i> Profile
                  <div class="nav-line"></div
                ></a>
              </li>
              @endif

              @else
              <li class="nav-item navbar-start">
                <a class="nav-link" href="{{route('login')}}">
                    <i class="fas fa-user"></i>
                  <div class="nav-line"></div
                ></a>
              </li>
              @endif
              @endif


            </ul>
          </div>
          <!-- </div> -->
        </nav>
      </div>

      <!-- nav end  -->
    </header>
    <!-- nav end  -->






    @yield('content')





        <!-- footer start  -->
        <footer
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-once="true"
        data-aos-easing="ease-in-sine"
      >
        <div class="container">
          <div class="row">
            <div
              class="col-12 d-flex justify-content-center col-lg-4"
              data-aos="fade-up"
              data-aos-offset="200"
              data-aos-once="true"
            >
              <img
                class="img-fluid w-50 pb-5 h-lg-75 rounded-3"
                src="images/contact.gif"
                alt=""
              />
            </div>
            <div
              class="col-6 col-lg-4"
              data-aos="fade-up"
              data-aos-offset="200"
              data-aos-once="true"
              data-aos-easing="ease-in-sine"
            >
              <ul>
                <h4 class="">Contact info</h4>
                <p>Head Office:</p>
                <li>Floor-6, House-576 </li>
                <li>Road-8, Avenue-4 </li>
                <li>Mirpur DOHS</li>
                <li>Dhaka-1216</li>
                <li>Bangladesh.</li>
              </ul>
            </div>
            <div
              class="col-6 col-lg-4"
              data-aos="fade-left"
              data-aos-offset="200"
              data-aos-once="true"
              data-aos-easing="ease-in-sine"
            >
              <ul>
                <h4>Factory Office :</h4>
                <li>89/2 Chaydana, Degerchala, </li>
                <li>National University, Gazipur , </li>
                <li>Bangladesh., Dhaka, Bangladesh</li>
                <li>Email: info@versatile.net</li>
                <li>Phone : +8801762686627</li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <div class="row justify-content-center align-items-center g-2 p-4">
          <div class="col text-center">
           <a href="https://github.com/saidurrahmanmisket/"> <u> Dev</u>elop </a>by <a href="https://kaizenitbd.com/"><u> Kaizen IT</u> Ltd</a>
            <br />
            <p>&#169;All Rights Reserved</p>
          </div>
        </div>
      </footer>
      <!-- footer end  -->

      <!-- owl carousel link -->
      <script src="plugins/jquery.min.js"></script>
      <script src="plugins/owlcarosel/owl.carousel.min.js"></script>

      <!-- Bootstrap JavaScript Libraries -->
      <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"
      ></script>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"
      ></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </body>
    <!-- aos animation   -->
    <script>
      AOS.init();
    </script>
    <!-- owl carousel  -->
    <script>
      var owl = $(".owl-one");
      var owltwo = $(".owl-two");
      var owlthree = $(".owl-three");
      var owlfour = $(".owl-four");

      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5500,
        autoplayHoverPause: false,
      });

      owltwo.owlCarousel({
        items: 4,
        loop: true,
        margin: 0,
        autoplay: false,
        center: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            center: true,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
      owlthree.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            center: true,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
      owlfour.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        dots: true,
        nav: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            center: true,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    </script>

    <!-- preloder  -->
    <script>
      setTimeout(function () {
        $(".loader_bg").fadeToggle();
      }, 1000);
    </script>
  </html>
