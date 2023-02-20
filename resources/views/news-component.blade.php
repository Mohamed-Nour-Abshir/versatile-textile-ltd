@extends('layouts.base')
@section('content')
    <!-- contant start here  ---------------------------------------->

    <section>
        <div class="container">
          <div
            class="row position-relative pt-5 pb-5 justify-content-center align-items-center g-2"
          >
            <div class="col-12 col-lg-7">
              <div class="gallery-title">
                <img
                  class="img-fluid position-absolute title-bg"
                  data-aos="fade-down-right"
                  data-aos-duration="3000"
                  src="../images/png/circle.svg"
                  alt=""
                />
              </div>
              <div class="display-1 text-center" style="min-height: 300px">
                News
              </div>
            </div>
            <div
              class="col-12 col-lg-5"
              data-aos="fade-left"
              data-aos-offset="200"
              data-aos-once="true"
              data-aos-easing="ease-in-sine"
            >
              <img
                class="img-fluid shadow"
                style="min-width: 100%"
                src="../images/png/news.gif"
                alt=""
              />
            </div>
            <hr class="border border-2" />
          </div>

          @foreach ($news as $item)
            <div class="row justify-content-center align-items-center g-2 pt-5 pb-5">
                <div class="col-4 d-flex justify-content-center">
                <img
                    class="img-fluid col-12 col-lg-8"
                    src="{{asset('images/News')}}/{{$item->image}}"
                    data-aos="fade-left"
                    data-aos-offset="200"
                    data-aos-once="true"
                    data-aos-easing="ease-in-sine"
                    alt=""
                />
                </div>
                <div class="news-text col-8"data-aos="fade-right"data-aos-offset="200" data-aos-once="true"data-aos-easing="ease-in-sine">
                <div class="display-5">
                    <a href="news-details.html"> {{$item->title}}</a>
                    <hr />
                </div>
                <p>
                    <i class="fa-solid fa-user"></i> Admin
                    <i class="fa-solid fa-calendar-days"></i> {{date('d-m-Y',strtotime($item->created_at))}}
                </p>
                <p>
                   {{$item->description}}
                </p>
                </div>
            </div>
          @endforeach



        </div>
      </section>

      <!-- content end here --------------------------------------- -->
@endsection
