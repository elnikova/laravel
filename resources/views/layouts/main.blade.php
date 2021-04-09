<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    @yield('css')
</head>
<body>
  <div class="container">
    <header>
      @include('layouts.navbar')
    </header>
    <main>
        <div class="row">
          <div class="col-md-3">
            @section('sidebar')
              @include('store.parts._list-categories')
            @show
          </div>
          <div class="col-md-9">@yield('content')</div>
        </div>
    </main>
    <footer>
    <h2><bold>Мир мебели</bold></h2>
    <div class="item">
      <div>
        <h4>Адресс магазина:</h4>
        <p>ул Седова, 36 р-н площади Профсоюзов<br>
        3-этажный универмаг, 4000 кв м.<br>
        Работает с 9:00 до 19:00 <br>
        без перерывов и выходных.<br>
        Телефоны :(061)226-00-52 - администрация;<br>
    </div>
    <div>
        <h4>Адресс производства:</h4>
        <p>Ул. Хортицкое шоссе, 6а<br>
        Работает с 9:00 до 19:00 без перерывов и выходных.<br>
        Телефон: (061)707-47-94</p>
    </div>  
    </div>  
    
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
  <script src="{{asset('js/app.js')}}"></script>
  @yield('js')
</body>
</html>
