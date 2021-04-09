@extends('layouts.main')


@section('content')

    <h1>{{$product->name}}</h1>

    <div class="prod-container row">
        <img src="{{$product->img}}" alt="{{$product->name}}">
        <p>{!!$product->description!!}</p>
    </div>
    <hr>

@endsection

@section('title', $product->name)