@extends('layouts.main')


@section('content')

    <h1>{{$product->name}}</h1>

    <div class="container">
        <img src="{{$product->img}}" alt="{{$product->name}}">
        <p>{!!$product->description!!}</p>

        <form action="" class="form-add-to-cart">
            <input style="width: 20%" type="number" name="qty" class="form-control" value="1">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="add-to-cart">
              <i class="fas fa-shopping-cart"></i><span>ADD TO CART</span>
            </button>
        </form>
    </div>
    <hr>
    <h4>Product reviews</h4>
    @forelse ($reviews as $review)
        <div class="border p-3 m-3">
            <h2>{{$review->name}}</h2>
            <p><i class="far fa-calendar-alt"></i>{{$review->created_at}}</p>
            <hr>
            <blockquote>{{$review->review}}</blockquote>
        </div>
        @empty 
        <p>No reviews</p>
    @endforelse
    <hr>
    <h4>Write a review</h4>
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @auth
    <form action="/reviews" method="POST">
        @csrf{{-- error 419 --}}
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text"  id="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
            @error('name') 
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="review">Message</label>
            <textarea  id="reviews" class="form-control @error('review') is-invalid @enderror" name="review" id="review">{{old('review')}}</textarea>
            @error('review') 
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button class="btn btn-primary m-2">SEND</button>
    </form>
    @else
        <p><a href="/login">Login</a> or <a href="/register">register</a></p>
    @endauth
@endsection

@section('title', $product->name)