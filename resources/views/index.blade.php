<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Elpquent</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
  
    <!-- Favicons -->
    <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Main Stylesheet File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>
<body>
  <!--==========================
  Header
  ============================-->

  <main id="main">
	
	    @yield('content')
  </main>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('frontend/lib/superfish/superfish.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('frontend/contactform/contactform.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
  var type="{{Session::get('alert-type','info')}}"
  switch(type){
  case 'info':
        toastr.info("{{Session::get('message')}}");
        break;

  case 'success':
        toastr.success("{{Session::get('message')}}");
        break;

  case 'warning':
        toastr.warning("{{Session::get('message')}}");
        break;

  case 'error':
        toastr.error("{{Session::get('message')}}");
        break;
}
@endif
</script>
  <!-- Template Main Javascript File -->
  <script src="{{ asset('frontend/js/main.js')}}"></script>

</body>
</html>