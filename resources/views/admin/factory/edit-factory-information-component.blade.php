@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success text-center">Edit factory</h6>
                </div>
                <div class="card-body">
                   <form action="{{route('factory.update',$factory->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Manufacturing unit</label>
                        <input type="text" id="name" name="unit" class="form-control  @error('unit') is-invalid @enderror" value="{{$factory->unit}}">
                        @error('unit')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="phone">Awards</label>
                        <input type="text" id="phone" name="awrads" class="form-control  @error('awrads') is-invalid @enderror" value="{{$factory->awrads}}">
                        @error('awrads')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="email">Employees</label>
                        <input type="text" id="email" name="employees" class="form-control  @error('employees') is-invalid @enderror" value="{{$factory->employees}}">
                        @error('employees')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="address">Total Factories</label>
                        <input type="text" id="email" name="factories" class="form-control  @error('factories') is-invalid @enderror" value="{{$factory->factories}}">
                        @error('factories')<span class="text-danger">{{$message}}</span> @enderror <br>
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
