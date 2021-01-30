@extends('layouts.main')
{{-- @section('css')
    //<link rel="stylesheet" href="css/style.css">
@endsection --}}

@section('content')

    <h1>{{$category->name}}</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
             @include('store.parts._product')
            @endforeach
        </div>
    </div>

@endsection



@section('title', $category->name)