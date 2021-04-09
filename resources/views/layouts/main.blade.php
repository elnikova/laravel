<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    @yield('css')
</head>
<body>
  <div class="container">
    <header>
      <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="name" href="#">Дом Мебели</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/store">Товары</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/info">Оплата и доставка</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reviews">Отзывы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts">Контакты</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
               @role('admin')
               <li class="nav-item">
                 <a class="nav-link" href="/admin">Admin Panel</a>
               </li>
               @endrole
               {{-- {{ dump(Gate::allows('manage-categories'))}} --}}
                @guest
                  @if (Route::has('login'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                  @endif
                  @if (Route::has('register'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  @endif
                @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                @endguest
          </ul>
        </div>
      </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            @section('sidebar')
                @include('store.parts._list-categories')
            @show
          </div>
          <div class="col-md-9">@yield('content')</div>
        </div>
      </div>
    </main>
    <footer>Footer</footer>
  </div>
  {{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> --}}
  <script src="{{asset('js/app.js')}}"></script>
  @yield('js')
</body>
</html>
