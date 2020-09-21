<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>crime report Admin</title>

      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
     
<link href="{{asset('css/app.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  
  <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{asset('font-awesome/css/font-awsome.min.css')}}" rel="stylesheet">

</head>

<body>
 @php  $active=session('active') ?? 'dashboard' @endphp
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-grey-500 border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-primary text-white">Crime Report admin </div>
      <div class="list-group list-group-flush">
        <a href="{{route('admin.home')}}" class="list-group-item list-group-item-action bg-light {{$active=='dashboard' ? 'bg-orange-600  text-primary':''}}">Dashboard</a>
        <a href="{{route('admin.stations')}}" class="list-group-item list-group-item-action bg-light {{$active=='station' ? 'bg-orange-600  text-primary':''}}">Police Station</a>
        <a href="{{route('admin.counties')}}" class="list-group-item list-group-item-action bg-light {{$active=='county' ? 'bg-orange-600  text-primary':''}}">Counties</a>
        <a href="{{route('admin.subcounties')}}" class="list-group-item list-group-item-action bg-light  {{$active=='subcounty' ? 'bg-orange-600  text-primary':''}}">Subcounties</a>
        <a href="{{route('admin.police')}}" class="list-group-item list-group-item-action bg-light {{$active=='police' ? 'bg-orange-600  text-primary':''}}">Police Officers</a>

         <a href="{{route('admin.wanted')}}" class="list-group-item list-group-item-action bg-light {{$active=='wanted' ? 'bg-orange-600  text-primary':''}}">Wanted Persons</a>

           <a href="{{route('admin.missing')}}" class="list-group-item list-group-item-action bg-light {{$active=='missing' ? 'bg-orange-600  text-primary':''}}">Lost Persons</a>
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
        <button class="btn btn-success" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
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
          </ul>
        </div>
      </nav>


@yield('content')


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
