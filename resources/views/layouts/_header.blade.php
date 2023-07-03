<div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="#"><span class="mai-call text-primary"></span> +255 688 349 680</a>
            <span class="divider">|</span>
            <a href="#"><span class="mai-mail text-primary"></span> wambalinuhu@gmail.com</a>
          </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-dribbble"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

      <form action="#">
        <div class="input-group input-navbar">
          <div class="input-group-prepend">
            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
        </div>
      </form>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('index.show')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutUs.show')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('doctors.show')}}">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('news.show')}}">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.show')}}">Contact</a>
          </li>
          @auth
          <li class="nav-item nav-style">
            <a class="nav-link" href="{{route('myAppointment.show')}}">My Appointment</a>
          </li>
        <li class="dropdown dropMenu">
            <a class="dropdown-toggle " data-toggle="dropdown" href="#"> <img src="{{asset('userAssets/img/doctors/profile.png')}}" alt="user-img" width="34" height="34" class="img-circle"><b class="user">{{Auth::user()->name}}</b> </a>
            <ul class="dropdown-menu dropdown-user animated flipInY">

                <li><a href="{{route('logout')}}"><i class="ti-power-off"></i>  Logout</a></li>
            </ul>

            <!-- /.dropdown-user -->
        </li>

          @else
                <li class="nav-item">
                    <a href="{{route('login')}}" class="btn btn-primary">
                        Login
                    </a>
                </li>
                <li class="nav-item" id="register">
                    <a href="{{route('register.show')}}" class="btn btn-primary">
                        Register
                    </a>
                 </li>
          @endauth
        </ul>
      </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
  </nav>
<!-- Button trigger modal -->
