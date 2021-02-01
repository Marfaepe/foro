<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foro  @yield('titulo')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('assets/img')}}/favicon.png" rel="icon">
  <link href="{{URL::asset('assets/img')}}/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="{{URL::asset('assets/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor')}}/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/css')}}/style.css" rel="stylesheet">
@yield('estilos')
  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
@include('layout.nav')
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- .nav-menu -->

    <!-- End Header -->

  <!-- ======= Hero Section ======= -->
<!-- End Hero -->

  <main id="main">
@include('layout.mensajes')
@yield('contenido')
    <!-- ======= About Section ======= -->
  <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
  <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
  <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
   <!--  End Course Item-->
 <!-- End Course Item-->
<!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
  <!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layout.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/vendor')}}/jquery/jquery.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/php-email-form/validate.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/counterup/counterup.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{URL::asset('assets/vendor')}}/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/js')}}/main.js"></script>

</body>

</html>
