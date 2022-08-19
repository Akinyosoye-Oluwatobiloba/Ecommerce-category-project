<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
{{-- styles --}}


<!-- plugins:css -->
<link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- endinject -->
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
@livewireStyles
</head>
<body>
    @yield('content')

  <div class="container-scroller">
    @include('layouts.inc.admin.navbar')
    <div class="container-fluid page-body-wrapper">
  @include('layouts.inc.admin.sidebar')

  <div class="main-panel">
    <div class="content-wrapper">

    </div>
  </div>



    </div>
  </div>


    <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->

  <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->


    @livewireScripts
    @stack('scripts')
</body>
</html>
