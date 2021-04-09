@extends('layouts.main')

@section('content')


    <div class="container">
        <div class="row">
            @foreach ($products as $product)
             @include('store.parts._product')
            @endforeach
        </div>
    </div>

@endsection


@section('title', 'Главная')
    


