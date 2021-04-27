<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{'GRACE Property Group'}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

     @include('include.header')
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 @yield('style')
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->


  @include('include.content');


  @yield('content')

  <!-- ======= Footer ======= -->
 @include('include.footer');

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @yield('scripts')

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
