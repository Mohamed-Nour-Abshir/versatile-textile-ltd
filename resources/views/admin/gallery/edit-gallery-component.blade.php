@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success text-center">Edit Gallery</h6>
                </div>
                <div class="card-body">
                   <form action="{{route('galleries.update',$gallery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Gallery Name</label>
                        <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{$gallery->name}}">
                        @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" id="image" name="newimage" class="form-control  @error('image') is-invalid @enderror">
                        {{-- @if ($newimage)
                            <img src="{{ $newimage->temporaryUrl() }}" width="120">
                        @else --}}
                            <img src="{{asset('images/Gallery')}}/{{$gallery->image}}" width="120">
                        {{-- @endif --}}
                        @error('image')<span class="text-danger">{{$message}}</span> @enderror <br>
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
