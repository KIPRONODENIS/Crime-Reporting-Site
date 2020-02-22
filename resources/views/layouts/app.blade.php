<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <style type="text/css">
      header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}

.our-webcoderskull{

  
}
.our-webcoderskull .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
  color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
  color:#337ab7;
}
.our-webcoderskull .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
  margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{ 
    display:inline-block; 
  width:auto; 
  margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

    </style>

</head>
<body>
    <div id="app px-4">
      <nav class="navbar navbar-expand-lg shadow  text-white py-3" style=" background: linear-gradient(to right, #fc4a1a, #f7b733);">
        <a class="navbar-brand text-xl" href="/">Crime Reporting Sytem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto ">
              <!-- Authentication Links -->

              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                          <a class="dropdown-item" href="/profile">Profile</a>
                      </div>
                  </li>
              @endguest
          </ul>
        </div>
      </nav>







        <main class="">
            @yield('content')
        </main>
    </div>

      <footer id="sticky-footer" class="py-4 bg-dark text-white-50"  style=" background: linear-gradient(to right, #fc4a1a, #f7b733);">
        <div class="h-5"></div>
    <div class="container text-center">
      <small>Copyright &copy; Crime Reporting Sytem 2020</small>
    </div>
     <div class="h-5"></div>
  </footer>
</body>
</html>
