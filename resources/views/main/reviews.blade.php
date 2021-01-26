@extends('layouts.main')

@section('content')
    <h1>Reviews</h1>

    @include('messages.errors')

    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

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
        <button class="btn btn-primary m-2">SEND</button>
    </form>


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

    {{$reviews->links()}}
@endsection

@section('title', $title)