<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR : @yield('title')</title>

  @include('layouts.theme.css')
  @yield('css_script')
  @yield('css_custom')

</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">


    <!-- Navbar -->
    @include('layouts.theme.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.theme.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    @include('layouts.theme.footer')

  </div>
  <!-- ./wrapper -->


  @include('layouts.theme.js')
  @yield('js_script')
  @yield('js_custom')

</body>

</html>
