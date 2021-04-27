
@extends('layout.home')

@section('content')

<main id="main">
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">65</span>

              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>

            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">12</span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
  </main>
@endsection

@section('scripts')
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
@endsection


@section('style')

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->

<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" href="">

<link href="{{asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@endsection


