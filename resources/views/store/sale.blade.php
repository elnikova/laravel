@extends('layouts.main')


@section('content')
    <h1>Sale</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
             @include('store.parts._product')
            @endforeach
        </div>
    </div>
    
    {{$products->links()}}
    
@endsection

@section('title', $title)