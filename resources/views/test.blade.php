@extends('layouts.app')

@section('content')
      {{-- @yield('sidebar') --}}
      <!--! Right Side -->
        <div class="welcome-jumbo">
          <div class="mobile-burger-menu">
            <button class="mobile-burger-menu__button">
              <div class="mobile-burger-menu__elements">
                <span class="line line01" role="Side Menu button"></span>
                <span class="line line02" role="Side Menu button"></span>
                <span class="line line03" role="Side Menu button"></span>
              </div>
            </button>
          </div>
          <div class="title-container">
            <h1>Mamma Mia' <span>Pizza</span></h1>
            <p>Now That's A Good Pie!</p>
          </div>
          <img src=".././public/img/pizza/pizza-main-cut.png" alt="Pizza" />
        </div>
@endsection
