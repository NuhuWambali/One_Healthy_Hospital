<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('adminAssets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('adminAssets/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('adminAssets/customstyling.css')}}" />
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.admin._sideNavBar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
          @include('layouts.admin._navBar')
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">

            @yield('content')

              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('layouts.admin._footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('adminAssets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('adminAssets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assetAssets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('adminAssets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('adminAssets/js/off-canvas.js')}}"></script>
    <script src="{{asset('adminAssets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('adminAssets/js/misc.js')}}"></script>
    <script src="{{asset('adminAssets/js/settings.js')}}"></script>
    <script src="{{asset('adminAssets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('adminAssets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
