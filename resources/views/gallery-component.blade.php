@extends('layouts.base')
@section('content')
    <!-- content start here --------------------------------------- -->

    <section>
        <div class="container galery pt-5 pb-5">
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
              <div class="display-1 text-center" style="min-height: 300px ;">Gallery</div>
            </div>
            <div class="col-12 col-lg-5">
              <img
                class="img-fluid shadow"
                style="min-width: 100%"
                src="../images/png/photography.gif"
                alt=""
              />
            </div>
            <hr class="border border-2" />
          </div>
          <div class="row justify-content-center align-items-center g-4">

            @foreach ($galleries as $gallery)
                <div class="col galery-img m-4">
                    <img class="img-fluid shadow" src="{{asset('images/Gallery')}}/{{$gallery->image}}" alt=""/>
                    <div class="fs-4 galery-text p-3">
                    <p class="mb-0">{{$gallery->name}}</p>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
      </section>

      <!-- content end here --------------------------------------- -->
@endsection
