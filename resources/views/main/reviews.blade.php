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
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
            @error('name') 
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="review">Message</label>
            <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="review">{{old('review')}}</textarea>
            @error('review') 
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button class="btn btn-primary mt-2">SEND</button>
    </form>
@endsection

@section('title', $title)