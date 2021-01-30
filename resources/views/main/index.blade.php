@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('content')

    <h1>{{$title}} {!! $subtitle !!}</h1>



    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="{{$product->img}}">
                        </a>
                        {{-- <span class="product-sale-label">Sale</span>
                        <span class="product-discount-label">-20%</span> --}}
                        <ul class="social">
                            <li><a href="#" data-tip="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fas fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fas fa-search"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                        <h5>{{$product->category->name}}</h5>
                        <div class="price discount"><span></span>{{$product->price}}$</div>
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="far fa-star"></li>
                        </ul>
                        <a class="add-to-cart" href="#">
                           <i class="fas fa-shopping-cart"></i> <span>ADD TO CART</span>
                        </a>
                    </div>
                </div>
                    
                
            </div>
            @endforeach
        </div>
    </div>

@endsection

{{-- @section('title')
    {{$title}}
@endsection --}}

@section('title', $title)
    


