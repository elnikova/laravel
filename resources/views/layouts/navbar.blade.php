
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item m">
       <a class="nav-link active" aria-current="page" href="/">Главная</a>
     </li>
     <li class="nav-item">
       <a class="nav-link m" href="/store">Товары</a>
     </li>
     <li class="nav-item">
       <a class="nav-link m" href="/info">Оплата и доставка</a>
     </li>
     <li class="nav-item">
       <a class="nav-link m" href="/reviews">Отзывы</a>
     </li>
     <li class="nav-item">
       <a class="nav-link m" href="/contacts">Контакты</a>
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
</<nav>
    