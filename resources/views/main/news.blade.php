@extends('layouts.main')

@section('title', $title)

@section('content')
    <h1>News</h1>
    {{$news->links()}}
    @foreach ($news as $key)
        <div class="border p-3 m-3">
            <h3>{{$key->title}}</h3><br>
            <p><i class="far fa-calendar-alt"></i>{{$key->created_at}}<br></p>
            <img src="/images/{{$key->img}}" alt="{{$key->title}}">
            <p>{{$key->short_content}} <a class="btn btn-secondary" href="show" role="button">Читать далее »</a>
            </p>
        </div>        
        <hr>
    @endforeach

    {{$news->links()}}
@endsection