@extends('layouts.main')


@section('content')

    <h1>{{$product->name}}</h1>

    <div class="container">
        <img src="{{$product->img}}" alt="{{$product->name}}">
        <p>{{$product->description}}</p>
    </div>
    
    @forelse ($reviewsOfProduct as $review)
        <div class="border p-3 m-3">
            <h2>{{$review->name}}</h2>
            <p><i class="far fa-calendar-alt"></i>{{$review->created_at}}</p>
            <hr>
            <blockquote>{{$review->review}}</blockquote>
        </div>
        @empty 
        <p>No reviews</p>
         
    @endforelse
@endsection



@section('title', $product->name)