@extends('layouts.base')
@section('content')
<!-- hero section start  -->
<main class=" ">
    <div class="owl-carousel owl-one owl-theme">
        @foreach ($sliders as $slider)
            <div class="item item-one" style='background-image: url("{{asset('images/HomeSliders')}}/{{$slider->image}}") ;'>
                <div class="transparent-dark h-100">
                <div class="container">
                    <!-- <div class="container-fluid"> -->
                    <div class="carousel-one-text" data-aos="fade-down-right" data-aos-once="true" data-aos-offset="300" data-aos-once="true" data-aos-easing="ease-in-sine">
                    {{-- <h1 class="fw-bold">{{$slider->title}}</h1>
                    <p>{{$slider->description}}</p> --}}
                    {{-- <a class="btn my-color my-color-hover borrad rounded fw-lighter me-3 btn-lg ps-3 pe-3" href="/about" role="button">Read More</a>
                    <a class="btn my-color my-color-hover borrad rounded fw-lighter me-3 btn-lg ps-3 pe-3" href="/contact" role="button">Contact Us</a> --}}
                    <!-- </div> -->
                    </div>
                </div>
                </div>
            </div>
        @endforeach


    </div>
  </main>
  <!-- hero section end -->

  <!-- KNOW US ---  -->

  <section>
    <div class="container">
      <div
        class="heading pt-5"
        data-aos="fade-up"
        data-aos-offset="300"
        data-aos-once="true"
        data-aos-easing="ease-in-sine"
      >
        <div class="display-1 text-center pb-4">Know US</div>
        <p>
            We at Versatile Textiles manufacture nano silver based eco
            safe Versatile Antimicrobial Agent applicable to all textiles
            at very economical price. Our versatile Antimicrobial finish
            for textiles helps in making anti viral, anti bacterial, and
            anti fungal textile products.
        </p>
        <p>
            We are serious about creating fresh and hygienic textile products.
            We exceed our customer’s expectations with better quality products
            To Achieve Quality Goal Through Continuous, Improve In Process And Long Term Sustainable Customers Satisfaction.
        </p>
      </div>
      <div
        class="row pt-5 justify-content-center align-items-center text-center g-2 pb-5 pt-5"
        data-aos="fade-right"
        data-aos-once="true"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
      >
        <div class="col-12 col-lg-3 shadow">
          <i class="fa-solid fa-ranking-star fa-2x"></i>
          <h4 class="display-4 fw-semibold">400 +</h4>
          <p>Manufacturing unit!!!</p>
        </div>
        <div class="col-12 col-lg-3 shadow">
          <i class="fa-solid fa-trophy fa-2x"></i>
          <h4 class="display-4 fw-semibold">9 +</h4>
          <p>Awards</p>
        </div>
        <div class="col-12 col-lg-3 shadow">
          <i class="fa-solid fa-people-roof fa-2x"></i>
          <h4 class="display-4 fw-semibold">40K +</h4>
          <p>Employees</p>
        </div>
        <div class="col-12 col-lg-3 shadow">
          <i class="fa-solid fa-industry fa-2x"></i>
          <h4 class="display-4 fw-semibold">37 +</h4>
          <p>Total Factories</p>
        </div>
      </div>
      <div
        class="factory row pt-5 justify-content-center align-items-center g-2"
        data-aos="fade-left"
        data-aos-once="true"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        >
        <div class="col-12 col-lg-6">
          <div class="heading">
            <div class="fs-1">Our Factory</div>
            <p>
                We at Versatile Textiles manufacture nano silver based eco
                safe Versatile Antimicrobial Agent applicable to all textiles
                at very economical price. Our versatile Antimicrobial finish
                for textiles helps in making anti viral, anti bacterial, and
                anti fungal textile products.
            </p>
            <p>
                We are serious about creating fresh and hygienic textile products.
                We exceed our customer’s expectations with better quality products.
                To Achieve Quality Goal Through Continuous, Improve In Process And Long Term Sustainable Customers Satisfaction.
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <img class="img-fluid rounded-4" src="images/slider-4.jpg" alt="" style="height:300px;">
        </div>
      </div>
    </div>
  </section>

  <!-- KNOW US END---  -->

  <!-- plan/ product section start  -->
  <section
    class="container plan-section"
    data-aos="fade-up"
    data-aos-offset="300"
    data-aos-once="true"
    data-aos-easing="ease-in-sine"
  >
    <div class="plan-main">
      <div class="display-3 text-center">
        Product Line
        <div class="nav-line"></div>
        <hr class="border border-light" />
      </div>
      <div class="row justify-content-center text-center plan gap-4 p-3">

        @foreach ($products as $product)
            <div class="col border product-box border-light rounded p-0 shadow" data-aos="fade-down-right" data-aos-offset="300" data-aos-once="true" data-aos-easing="ease-in-sine">
                <a class="product-link" href="pages/product/product-details.html">
                <div class="product-images">
                    <div class="product-text">
                    <div class="product-text-child mt-5">
                        <h4>
                            @if ($product->product_type === 'mensItem')
                                Men's Item
                            @elseif ($product->product_type === 'boysItem')
                                Boy's Item
                            @elseif ($product->product_type === 'girlsItem')
                                Girl's Item
                            @elseif ($product->product_type === 'kidsItem')
                                Kid's Item
                            @else
                                Ladies Item
                            @endif
                        </h4>
                        <p>Style Description : {{$product->description}}</p>
                        <p>Fabric : {{$product->fabric}}</p>
                        <p>Weight : {{$product->weight}}</p>
                    </div>
                    </div>
                    <img class="img-fluid rounded" src="{{asset('images/Products')}}/{{$product->image}}" alt="" />
                </div>
                </a>
            </div>
        @endforeach


        {{-- <div class="row justify-content-center align-items-center g-2 pb-5">
          <div class="col">
            <a class="btn btn-dark" href="pages/product/t-shirt.html"
              >view more..</a
            >
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- plan / product section end  -->

  <!-- clint section start -->
  <div
    class="bg-my-dark"
    data-aos="fade-down"
    data-aos-offset="300"
    data-aos-once="true"
    data-aos-easing="ease-in-sine"
  >
    <section class="container pt-5">
      <div class="display-1 text-center pt-5 mt-5 pb-5">Our Brand</div>
      <hr class="border border-light mb-5" />
      <div
        class="row justify-content-center text-center gap-5 p-1"
        data-aos="fade-left"
        data-aos-offset="300"
        data-aos-once="true"
        data-aos-easing="ease-in-sine"
      >
        <div class="owl-carousel col owl-two owl-theme">
          <div class="item clint rounded my-color-hover col p-5 border border-light position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/tesco.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/Esprit.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/George.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/Lidl.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/LPPlogo.jpg" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/NextSourcing.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

          <div class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative">
            <div class="d-flex justify-content-center">
              <img src="images/clint/OVS_logo.jpg" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>

        </div>
      </div>
      <div
        class="row justify-content-center text-center gap-5 p-1"
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-once="true"
        data-aos-easing="ease-in-sine"
      >
        <div class="owl-carousel owl-three owl-theme">
          <div
            class="item clint rounded my-color-hover col p-5 border border-light position-relative"
          >
            <div class="d-flex justify-content-center">
              <img
                class="bg-light"
                src="images/clint/C&Alogo2011.png"
                alt=""
              />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/Carhartt.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/tesco.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/ElCorteIngles.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/Esprit.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/G-Star.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/George.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
          <div
            class="item clint rounded my-color-hover col p-5 border border-light my-color-hover position-relative"
          >
            <div class="d-flex justify-content-center">
              <img src="images/clint/H&M.png" alt="" />
              <a class="position-absolute text-decoration-none" href=""
                ><h3 class="display-6">C&A</h3></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- clint section end  -->

  <!-- review section  start -->

  <section
    data-aos="fade-down"
    data-aos-offset="300"
    data-aos-once="true"
    data-aos-easing="ease-in-sine"
  >
    <div class="container certificate">
      <div class="row">
        <div class="col">
          <div class="display-2 text-center pt-5 mt-5">Our Review</div>
        </div>
      </div>
      <!-- review  -->

      <div class="owl-carousel owl-four owl-theme pb-5">
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">Amazing service</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img class="img-fluid" src="images/review/two.jpg" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">Aweoseme service</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img class="img-fluid" src="images/review/one.jpg" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">This is best service</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img
                    class="img-fluid shadow"
                    src="images/review/three.jpg"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">BEST</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img
                    class="img-fluid shadow"
                    src="images/review/four.jpg"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">Recommend</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img
                    class="img-fluid shadow"
                    src="images/review/five.webp"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <div class="d-flex w-100 col">
              <div class="text pe-2 w-75">
                <h3 class="display-6">This is awesome</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sed aliquid laborum enim minima totam cupiditate!
                </p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
              </div>
              <div class="review-img">
                <a href="">
                  <img class="img-fluid" src="images/review/six.jpg" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="bg-light text-light border border-2 mb-5 mt-5" />

  <!-- review section end -->

  <!-- certificate start  -->
  <section
    data-aos="fade-down"
    data-aos-offset="300"
    data-aos-once="true"
    data-aos-easing="ease-in-sine"
  >
    <div class="container certificate">
      <div
        class="row justify-content-center pt-5 mt-5 border-light border-bottom"
      >
        <div
          class="col-12 col-lg-8 p-4 text-lg-start text-center"
          data-aos="fade-up-right"
          data-aos-offset="300"
          data-aos-once="true"
          data-aos-easing="ease-in-sine"
        >
          <h1 class="">OUR CERTIFICATION</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
            iste nemo ullam architecto assumenda dolore ut at maxime autem,
            quisquam, recusandae sed facere facilis voluptatum fugit quos, ea
            mollitia minus.
          </p>
        </div>
        <div
          class="col-12 col-lg-4 d-flex justify-content-lg-end justify-content-center"
          data-aos="fade-up-left"
          data-aos-offset="300"
          data-aos-once="true"
          data-aos-easing="ease-in-sine"
        >
          <img
            class="img-fluid w-=75 ms-lg-auto"
            src="images/Certificate.gif"
            alt=""
          />
        </div>
      </div>
      <!-- certificate  -->

      <div class="owl-carousel owl-four owl-theme pb-5">
        <div class="row pt-5">
          <div class="col-12 col-lg-12 d-lg-flex">
            <!-- <div class="d-flex w-100 col-12"> -->
            <div class="col-12 col-lg-8">
              <h3 class="display-6">This is certificat of</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                aliquid laborum enim minima totam cupiditate!
              </p>
            </div>
            <div class="col-12 col-lg-4">
              <a href="">
                <img
                  class="img-fluid ms-auto me-auto"
                  src="images/certificate/bgmea.png"
                  alt=""
                />
              </a>
            </div>
            <!-- </div> -->
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-lg-12 d-lg-flex">
            <!-- <div class="d-flex w-100 col-12"> -->
            <div class="col-12 col-lg-8">
              <h3 class="display-6">This is certificat of</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                aliquid laborum enim minima totam cupiditate!
              </p>
            </div>
            <div class="col-12 col-lg-4">
              <a class="" href="">
                <img
                  class="img-fluid ms-auto me-auto w-50"
                  src="images/certificate/Accord Recognition Letter-Vertex Wear Ltd.jpg"
                  alt=""
                />
              </a>
            </div>
            <!-- </div> -->
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-lg-12 d-lg-flex">
            <!-- <div class="d-flex w-100 col-12"> -->
            <div class="col-12 col-lg-8">
              <h3 class="display-6">This is certificat of</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                aliquid laborum enim minima totam cupiditate!
              </p>
            </div>
            <div class="col-12 col-lg-4">
              <a href="">
                <img
                  class="img-fluid ms-auto me-auto"
                  src="images/certificate/leed.png"
                  alt=""
                />
              </a>
            </div>
            <!-- </div> -->
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-lg-12 d-lg-flex">
            <!-- <div class="d-flex w-100 col-12"> -->
            <div class="col-12 col-lg-8">
              <h3 class="display-6">This is certificat of</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                aliquid laborum enim minima totam cupiditate!
              </p>
            </div>
            <div class="col-12 col-lg-4">
              <a href="">
                <img
                  class="img-fluid ms-auto me-auto"
                  src="images/certificate/wrap.png"
                  alt=""
                />
              </a>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- certificate start  -->
@endsection




