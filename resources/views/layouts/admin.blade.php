<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>
<link href="{{asset('css/app.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  
  <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{asset('font-awesome/css/font-awsome.min.css')}}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-grey-500 border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-primary text-white">Crime Report admin </div>
      <div class="list-group list-group-flush">
        <a href="{{route('admin.home')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{route('admin.stations')}}" class="list-group-item list-group-item-action bg-light">Police Station</a>
        <a href="{{route('admin.counties')}}" class="list-group-item list-group-item-action bg-light">Counties</a>
        <a href="{{route('admin.subcounties')}}" class="list-group-item list-group-item-action bg-light">Subcounties</a>
        <a href="{{route('admin.police')}}" class="list-group-item list-group-item-action bg-light">Police Officers</a>

         <a href="{{route('admin.wanted')}}" class="list-group-item list-group-item-action bg-light">Wanted Persons</a>

           <a href="{{route('admin.missing')}}" class="list-group-item list-group-item-action bg-light">Lost Persons</a>
       
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
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
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
