@extends('layouts.main')

@section('content')
      
    <div class="container">
        <div class="logo"> Дом мебели</div>
        @include('store.parts._slider')
        <p class="about">У нас Вы можете заказать изготовление шкафа-купе, кухни, прихожей и другой корпусной мебели по индивидуальному проекту. Также мы можем укомплектовать Вашу кухню бытовой техникой ведущих производителей Европы и мягкими кухонными уголками запорожских производителей.</p>
        <div class="row mt-3">
            @foreach ($products as $product)
             @include('store.parts._product')
            @endforeach
        </div>
    </div>

@endsection


@section('title', 'Главная')
    


