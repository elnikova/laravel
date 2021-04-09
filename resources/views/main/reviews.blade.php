@extends('layouts.main')

@section('content')
    <h1>Отзывы</h1>

    @include('messages.errors')

    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @auth
    <form action="/reviews" method="POST" class="form">
        @csrf
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
        <button class="btn m-2">Отправить</button>
    </form>
    @else
        <p>Чтобы оставить отзыв, нужно <a href="/login">Войти</a> или <a href="/register">Зарегестрироваться</a></p>
    @endauth
    @forelse ($reviews as $review)
        <div class="review">
            <h2>{{$review->name}}</h2>
            <p><i class="far fa-calendar-alt"></i> {{$review->created_at}}</p>
            <hr>
            <blockquote>{{$review->review}}</blockquote>
        </div>
        @empty
        <p>No reviews</p>
    @endforelse

    {{$reviews->links()}}
@endsection

@section('sidebar')

    <div>
        <h4>Адресс магазина:</h4>
        <p>ул Седова, 36 р-н площади Профсоюзов<br>
        3-этажный универмаг, 4000 кв м.<br>
        Работает с 9:00 до 19:00 без перерывов и выходных.<br>
        Телефоны :(061)226-00-52 - администрация;<br>
        (061)226-00-32 отдел кухонь;</p>
    </div>
    <div>
        <h4>Адресс производства:</h4>
        <p>Ул. Хортицкое шоссе, 6а<br>
        Работает с 9:00 до 19:00 без перерывов и выходных.<br>
        Телефон: (061)707-47-94</p>
    </div>

@endsection

@section('title', $title)
