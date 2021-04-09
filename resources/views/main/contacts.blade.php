@extends('layouts.main')

@section('content')
    
    <h1>Свяжитесь с нами</h1>

    @include('messages.errors')

    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <form action="/contacts" method="POST" class="form">
        @csrf{{-- error 419 --}}
        <div class="form-group">
            <label for="name">Вашн имя:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Ваш е-mail:</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}">
            @error('email')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="message">Ваше сообщение:</label>
            <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message">{{old('name')}}</textarea>
            @error('message')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button class="btn mt-2">Отправить</button>
    </form>
@endsection


@section('title', 'Контакты')

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
