<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._meta')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    @include('layouts._header')
  </header>
  @if(session()->has('message'))
  <div class="alert alert-success">
       <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>
       {{session()->get('message')}}
  </div>
  @endif
  @yield('content')

  <footer class="page-footer">
    @include('layouts._footer')
  </footer>

@include('layouts._javascript')
</body>
</html>
