@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Add Gallery</h6>
                </div>
                <div class="card-body">
                   <form action="{{route('galleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Gallery Name</label>
                        <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid @enderror">
                        @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control  @error('image') is-invalid @enderror">
                        @error('image')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary form-control" type="submit">Add</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>


@endsection
