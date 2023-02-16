@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Brands</h6>
                    @if (Session::has('message'))
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <a href="{{route('brand.create')}}" class="btn btn-primary">Add Brand</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>
                                        <img src="{{asset('images/Brand')}}/{{$brand->image}}" class="img-fluid" width="80" height="80" alt="">
                                    </td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-success btn-circle mb-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('brand.destroy',$brand->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @if ($brand->role !== 1)
                                                <button type="submit" onclick="return confirm('Are you sure to delete this brand?')" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

