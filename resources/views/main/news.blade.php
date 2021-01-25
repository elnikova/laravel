@extends('layouts.main')

@section('title', $title)

@section('content')
    <h1>News</h1>
    {{$news->links()}}
    @foreach ($news as $key)
        <div class="border p-3 m-3">
            <h3>{{$key->title}}</h3><br>
            {{$key->created_at}}<br>
            <img src="{{$key->img}}" alt="{{$key->title}}">
            <p>{{$key->short_content}}</p>
            <p><a class="btn btn-secondary" href="#" role="button">Читать далее »</a></p>
        </div>
        <hr>
    @endforeach

    {{$news->links()}}
@endsection