<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  @include('Components.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Navbar -->
  @include('Components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Components/sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  
  <!-- /.content-wrapper -->
  @include('Components/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

@include('Components.js')
</body>
</html>
