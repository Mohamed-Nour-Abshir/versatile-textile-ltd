@extends('layouts.base')
@section('content')
    <!-- contant start here  ---------------------------------------->

    <section>
        <div class="container">
          <div class="row justify-content-center align-items-center g-2 pt-5">
            <div class="col-12 col-lg-6 pe-5">
              <img class="img-fluid contact-gif" src="../images/contactus.avif" alt="" />
            </div>

            <div class="col-12 col-lg-6">
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    @endif
              <form action="{{route('contactUs')}}" method="POST" class="border border-2 mt-5 rounded-2 p-3">
                @csrf
                <div class="display-4">Get in Touch</div>
                <div class="mb-3 from-box">
                  <label for="" class="form-label">Name</label>
                  <input
                    type="text"
                    name="name"
                    id="input-forom"
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter Your name"
                    aria-describedby="helpId"
                  />
                  @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>

                  <label for="" class="form-label">E-mail</label>
                  <input
                    type="text"
                    name="email"
                    id="input-forom"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter Your mal"
                    aria-describedby="helpId"
                  />
                  @error('email')<span class="text-danger">{{$message}}</span> @enderror <br>

                  <label for="" class="form-label">phpne</label>
                  <input
                    type="text"
                    name="phone"
                    id="input-forom"
                    class="form-control @error('phone') is-invalid @enderror"
                    placeholder="Enter Your number"
                    aria-describedby="helpId"
                  />

                  @error('phone')<span class="text-danger">{{$message}}</span> @enderror <br>

                  <label for="">Message</label>
                  <textarea
                    name="message"
                    id="input-forom"
                    cols="30"
                    rows="6"
                    class="form-control @error('message') is-invalid @enderror"
                  ></textarea>

                  @error('message')<span class="text-danger">{{$message}}</span> @enderror <br>

                  <button class="btn btn-dark">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5 justify-content-center align-items-center g-2">

            <div class="col mb-auto pe-5">
              <div class="display-5">Dhaka Office</div>
              <p>
                <i
                  class="fa-solid fa-map-location-dot border border-2 rounded-circle p-2"
                ></i>
                <b class="fw-800">Address: </b> {{$settings->address}}<br>
              </p>
              <p>
                  <i class="fa-solid fa-phone border border-2 rounded-circle p-2"></i>
                <b class="fw-800">Phone: </b>{{$settings->phone}}
              </p>
              <p>
                  <i class="fa-regular fa-envelope border border-2 rounded-circle p-2"></i>
                <b class="fw-800">Email: </b>{{$settings->email}}
              </p>
            </div>

            <div class="col ">
              <iframe class="rounded "
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9058862376114!2d90.38469101445588!3d23.75073529468154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ac5fce59cb%3A0xfd3e17cbaa2f7805!2sKaizen%20IT%20Ltd.!5e0!3m2!1sbn!2sbd!4v1672835487815!5m2!1sbn!2sbd"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
          <div class="row pt-5 justify-content-center align-items-center g-2">


              <div class="col ">
                  <iframe class="rounded pe-5 "
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9058862376114!2d90.38469101445588!3d23.75073529468154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ac5fce59cb%3A0xfd3e17cbaa2f7805!2sKaizen%20IT%20Ltd.!5e0!3m2!1sbn!2sbd!4v1672835487815!5m2!1sbn!2sbd"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>

            <div class="col mb-auto -5">
              <div class="display-5">Chitagong Office</div>
              <p>
                <i
                  class="fa-solid fa-map-location-dot border border-2 rounded-circle p-2"
                ></i>
                <b class="fw-800">Address: </b>{{$settings->address}}
              </p>
              <p>
                  <i class="fa-solid fa-phone border border-2 rounded-circle p-2"></i>
                <b class="fw-800">Phone: </b>{{$settings->phone}}
              </p>
              <p>
                  <i class="fa-regular fa-envelope border border-2 rounded-circle p-2"></i>
                <b class="fw-800">Email: </b>{{$settings->email}}
              </p>
            </div>


          </div>

        </div>
      </section>

      <!-- content end here --------------------------------------- -->
@endsection
