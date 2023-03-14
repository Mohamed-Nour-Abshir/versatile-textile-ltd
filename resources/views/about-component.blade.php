@extends('layouts.base')

@section('content')
    <!-- contant start here  ---------------------------------------->

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2 pt-5">
            <div class="col pt-5">
                <!-- <div class="display-4 text-center">
                Details
                </div> -->
                <h4>
                    Versatile has started it's journey in 2012 and till date, it has resulted in a conglomerate of 5 concerns.
                </h4>
                <p>
                    Versatile has started it's journey in 2012 and till date, it has resulted in a conglomerate of 5 concerns. Skilled and dedicated workforce of more than 1500 employees of Versatile Textile is the enormous strength of the company. Presently it's annual turnover is more than 20 Million USD, supplies best quality apparels to world renowned retailers. Versatile is upholding its reputation to the customers by providing services and also constantly involved with sustainable activities focusing on social and environmental aspects.
                </p>
            </div>
            </div>
            <div
            class="row justify-content-center align-items-start g-2 pt-5 pb-5"
            data-aos="fade-left"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine"
            >
            <div class="col-12 col-lg-2">
                <img class="img-fluid" src="../images/mision.png" alt="" />
            </div>
            <div class="col-12 col-lg-10 ps-5">
                <div>
                <h4 class="display-5">Our Mission</h4>
                <hr class="border border-3" />
                <p>- Exceed our customer’s expectations with better quality products.</p>
                <p>- Effective Quality Management System. </p>
                </div>
            </div>
            </div>
            <div
            class="row justify-content-center align-items-start g-2 pt-5 pb-5"
            data-aos="fade-left"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine"
            >
            <div class="col-12 col-lg-2">
                <img class="img-fluid" src="../images/vision.png" alt="" />
            </div>
            
            <div class="col-12 col-lg-10 ps-5">
                <div class="text-start pe-5">
                <h4 class="display-5">Our VISION</h4>
                <hr class="border border-3" />
                <p>To Achieve Quality Goal Through Continuous, Improve In Process And Long Term Sustainable Customers Satisfaction.</p>
                <p>To be the leader in our wide variety of businesses by nurturing our 5Ps, People, Portfolio, Partners, Profit, Productivity</p>
                </div>
            </div>

            </div>
            <div
            class="row justify-content-center align-items-start g-2 pt-5 pb-5"
            data-aos="fade-right"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine"
            >
            <div class="col-12 col-lg-2">
                <img class="img-fluid" src="../images/value.png" alt="" />
            </div>
            <div class="col-12 col-lg-10 ps-5">
                <div>
                <h4 class="display-5">CORE VALUES</h4>
                <hr class="border border-3" />
                We, at T. K. Group of Industries, abide by our core values to stay
                on track towards achieving our goal.
                <br />
                We believe in:<br />
                -Transparency in every operation<br />
                -Adaptability towards change<br />
                -Creation of an enabling environment<br />
                -Thrive for excellence<br />

                While our transparency keeps our conscience intact, our ability to
                adapt and empower our <br />people always ensures excellence in
                all our activities.<br />
                </div>
            </div>
            </div>
        </div>
        </section>

        <section>
        <div class="container">
            <div
            class="heading pt-5"
            data-aos="fade-up"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine"
            >
            <div class="display-4 text-center pb-4">We Have</div>
            <p>
                We at Versatile Textiles manufacture nano silver based
                eco safe Versatile Antimicrobial Agent applicable to all textiles
                at very economical price. Our versatile Antimicrobial finish for
                textiles helps in making anti viral, anti bacterial, and anti fungal
                textile products.
            </p>
            <p>
                We are serious about creating fresh and hygienic textile products.
                We exceed our customer’s expectations with better quality products
                To Achieve Quality Goal Through Continuous, Improve In Process And Long
                Term Sustainable Customers Satisfaction.
            </p>
            </div>
            <div
            class="row pt-5 justify-content-center align-items-center text-center g-2 pb-5 pt-5"
            data-aos="fade-down"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine"
            >
            <div class="col-12 col-lg-3 shadow">
                <i class="fa-solid fa-ranking-star fa-2x"></i>
                <h4 class="display-4 fw-semibold">{{$factory->unit}}</h4>
                <p>Manufacturing unit!!!</p>
            </div>
            <div class="col-12 col-lg-3 shadow">
                <i class="fa-solid fa-trophy fa-2x"></i>
                <h4 class="display-4 fw-semibold">{{$factory->awrads}}</h4>
                <p>Awards</p>
            </div>
            <div class="col-12 col-lg-3 shadow">
                <i class="fa-solid fa-people-roof fa-2x"></i>
                <h4 class="display-4 fw-semibold">{{$factory->employees}}</h4>
                <p>Employees</p>
            </div>
            <div class="col-12 col-lg-3 shadow">
                <i class="fa-solid fa-industry fa-2x"></i>
                <h4 class="display-4 fw-semibold">{{$factory->factories}}</h4>
                <p>Total Factories</p>
            </div>
            </div>
            <div class="row pt-5 justify-content-center align-items-center g-2">
            <div class="col-12 col-lg-6">
                <div
                class="heading"
                data-aos="fade-right"
                data-aos-offset="200"
                data-aos-once="true"
                data-aos-easing="ease-in-sine"
                >
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
                    To Achieve Quality Goal Through Continuous, Improve In Process And
                    Long Term Sustainable Customers Satisfaction.
                </p>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left"
            data-aos-offset="200"
            data-aos-once="true"
            data-aos-easing="ease-in-sine">
                <img
                class="img-fluid rounded-4"
                src="../images/banner.jpg"
                alt=""
                />
            </div>
            </div>
        </div>
        </section>

        <div class="container pt-5">
        <div class="row justify-content-center align-items-center g-2" data-aos="fade-up"
        data-aos-offset="200"
        data-aos-once="true"
        data-aos-easing="ease-in-sine">
            <h1 class="text-center pb-4 pt-5">Versatile Founder’s Profile</h1>
            <div
            class="col-12 col-lg-4 align-self-start pt-3 justify-content-start"
            data-aos="fade-down"
                data-aos-offset="200"
                data-aos-once="true"
                data-aos-easing="ease-in-sine"
            >
                <img class="img-fluid mb-2" src="{{asset('images/Team')}}/{{$teamFounder->image}}" alt="" />
                <div class="text-center"><b>{{$teamFounder->name}}</b></div>
                <p class="text-center"><b>{{$teamFounder->title}}</b></p>
            </div>

            <div class="col-12 col-lg-8 mb-5 ps-4">
                <h3>{{$teamFounder->name}}</h3>
            <p>
                {{$teamFounder->message}}
            </p>

            </div>

        </div>
        </div>
        {{-- <section class="bg-my-dark pb-5">
        <div class="container" data-aos="fade-left"
        data-aos-offset="200"
        data-aos-once="true"
        data-aos-easing="ease-in-sine">
            <div class="row justify-content-center align-items-center g-2">
            <div class="display-4 text-center pb-4 pt-5">
                Managing Director Message
            </div>

            <div
                class="col-12 col-lg-4 align-self-start pt-3 justify-content-start"
            >
                <img class="img-fluid" src="{{asset('images/Team')}}/{{$teamManager->image}}" alt="" />
                <p class="text-center pt-5">{{$teamManager->title}}</p>
                <p class="text-center">{{$teamManager->name}}</p>
            </div>
            <div
                class="col-12 col-lg-8 text-start ps-5 d-flex flex-wrap align-self-start"
            >
                <p>{{$teamManager->message}}</p>
            </div>
            </div>
        </div>
        </section> --}}

        <!-- content end here --------------------------------------- -->
@endsection
