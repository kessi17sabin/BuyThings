<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendor/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendor/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendor/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}"/>
</head>

<body>

  <div class="container-scroller">

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

      @include('admin.sidebar')

      <div class="main-panel">
          @yield('content')

        @include('admin.footer')

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="{{asset('admin/vendor/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/vendor/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>

  <!--Vue js script-->
  <script src="https://unpkg.com/vue@2.5.21/dist/vue.js"></script>
  <script src="{{asset('admin/js/vue.js')}}"></script>

  <!--custom js-->
  <script src="{{asset('admin/js/custom.js')}}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
