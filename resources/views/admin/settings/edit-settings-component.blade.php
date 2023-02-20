@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success text-center">Edit Settings</h6>
                </div>
                <div class="card-body">
                   <form action="{{route('settings.update',$settings->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{$settings->name}}">
                        @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror" value="{{$settings->phone}}">
                        @error('phone')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{$settings->email}}">
                        @error('email')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea type="text" id="address" name="address" class="form-control  @error('address') is-invalid @enderror">{{$settings->address}}</textarea>
                        @error('address')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success form-control" type="submit">Update</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>


@endsection
