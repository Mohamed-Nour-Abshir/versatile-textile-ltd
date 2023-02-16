@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All products</h6>
                    @if (Session::has('message'))
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Style description</th>
                                <th>Fabric</th>
                                <th>Weight</th>
                                <th>Product Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{asset('images/Products')}}/{{$product->image}}" class="img-fluid" width="80" height="80" alt="">
                                    </td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->fabric}}</td>
                                    <td>{{$product->weight}}</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-success btn-circle mb-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure to delete this product?')" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
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

