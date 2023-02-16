@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success text-center">Edit Product</h6>
                </div>
                <div class="card-body">
                   <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="fabric" class="form-control-label">Product Fabric</label>
                        <input type="text" id="fabric" name="fabric" class="form-control  @error('fabric') is-invalid @enderror" value="{{$product->fabric}}">
                        @error('fabric')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="weight" class=" form-control-label">Product Weight</label>
                        <input type="text" id="weight" name="weight" class="form-control  @error('weight') is-invalid @enderror" value="{{$product->weight}}">
                        @error('weight')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group" class=" form-control-label">
                        <label for="description">Style Description</label>
                        <textarea type="text" id="description" name="description" class="form-control  @error('description') is-invalid @enderror">{{$product->description}}</textarea>
                        @error('description')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="product_type" class=" form-control-label">Product Type</label>
                        <select name="product_type" id="product_type" class="form-control @error('product_type') is-invalid @enderror">
                            <option value="{{$product->product_type}}" selected>--- {{$product->product_type}} ---</option>
                            <option value="mensItem">Men's Item</option>
                            <option value="boysItem">Boy's Item</option>
                            <option value="girlsItem">Girl's Item</option>
                            <option value="kidsItem">Kid's Item</option>
                            <option value="laidesItem">Ladies Item</option>
                        </select>
                        @error('product_type')<span class="text-danger">{{$message}}</span> @enderror <br>
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">Product Image</label>
                        <input type="file" id="image" name="newimage" class="form-control  @error('newimage') is-invalid @enderror" value="{{$product->newimage}}">
                        @error('newimage')<span class="text-danger">{{$message}}</span> @enderror <br>
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
