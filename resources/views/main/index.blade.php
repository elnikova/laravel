@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('content')

    <h1>{{$title}} {!! $subtitle !!}</h1>

    {{-- @foreach ($categories as $category)
        <p> {{$category->name}} </p>
    @endforeach --}}


    {{-- @foreach ($products as $product)
        <p> {{$loop->iteration}} {{$product}} </p>
    @endforeach --}}

@endsection

{{-- @section('title')
    {{$title}}
@endsection --}}

@section('title', $title)
    


