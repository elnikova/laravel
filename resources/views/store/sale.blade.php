@extends('layouts.main')


@section('content')
    <h1>Sale</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="{{$product->img}}">
                        </a>
                        <span class="product-trend-label">Sale</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fas fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fas fa-search"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                        <div class="price">{{$product->price}}$</div>
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




    {{$products->links()}}
    
@endsection

@section('title', $title)