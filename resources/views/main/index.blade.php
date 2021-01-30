@extends('layouts.main')
{{-- @section('css')
    //<link rel="stylesheet" href="css/style.css">
@endsection --}}

@section('content')

    <h1>{{$title}} {!! $subtitle !!}</h1> {{--!! - чтобы теги работали --}}



    <div class="container">
        <div class="row">
            @foreach ($products as $product)
             @include('store.parts._product')
            @endforeach
        </div>
    </div>

@endsection

{{-- @section('title')
    {{$title}}
@endsection --}}

@section('title', $title)
    


