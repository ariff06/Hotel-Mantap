
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Mantap</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="hold-transition">
<!-- As a link -->
@include('layouts.inc_tamu.navbar')

<div class="container-fluid p-0">
    <img src="images/banner.jpg" class="img img-fluid w-100">
</div>

<div class="container content">
@yield('content')
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted"><strong>Copyright &copy;2025</strong>
        <a href="{{ route('login') }}" class="hidden-button">airip</a>
    </span>
    </div>
</footer>

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
