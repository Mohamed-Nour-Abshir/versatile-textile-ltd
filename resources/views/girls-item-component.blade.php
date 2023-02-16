@extends('layouts.base')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
@section('content')

<style>
    body{
        background: #fff;
    }
    p{
        font-family: 'Nanum Myeongjo', serif;
    }
    h1{
        font-family: 'Cinzel', serif;
    }
</style>
<div class="container">
    <h1 class="text-primary border-bottom pb-3 mt-3">Girl's Item</h1>
    <div class="row">
        @php
            $i = 0;
        @endphp
        @foreach ($products as $product)
        @if ($product->product_type === "girlsItem")
            <div class="col-md-6 p-5 border-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/Products')}}/{{$product->image}}" class="img-fluid rounded" alt="" style="height:300px;">
                    </div>
                    <div class="col-md-6">
                        <p class="text-dark">S/N: 0{{++$i}}</p>
                        <p class="text-dark">Style Descriptions : {{$product->description}}</p>
                        <p class="text-dark">Fabrics : {{$product->fabric}}</p>
                        <p class="text-dark">WEIGHT: {{$product->weight}}</p>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>
</div>


@endsection
