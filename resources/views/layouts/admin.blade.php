<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="Okey School">
  <meta name="author" content="Elite Tech">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Okey Admin') }}</title>
  <link rel="stylesheet" href="/administration/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/administration/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/administration/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="/administration/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/administration/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/administration/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="/administration/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet"
    href="/administration/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="/administration/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="/administration/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css ">
  
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    @include('admin.includes.header')

    @include('admin.includes.sidebar')

    <div class="content-wrapper">

      <section class="content">
      <main class="py-4">

        @yield('content')

      </main>
      
      </section>
    </div>

  </div>


  <script src="/administration/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/administration/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="/administration/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/administration/bower_components/raphael/raphael.min.js"></script>
  <script src="/administration/bower_components/morris.js/morris.min.js"></script>
  <script src="/administration/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script src="/administration/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/administration/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/administration/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <script src="/administration/bower_components/moment/min/moment.min.js"></script>
  <script src="/administration/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="/administration/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/administration/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="/administration/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="/administration/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="/administration/dist/js/adminlte.min.js"></script>
  <script src="/administration/bower_components/ckeditor/ckeditor.js"></script>
  <script>
    $(function () {
      CKEDITOR.replace('editor1')
      $('.textarea').wysihtml5()
    })
  </script>
</body>

</html>