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
    <title>{{ config('app.name', 'Okey') }}</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="/assets/css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/assets/flaticon.css">
    <link rel="stylesheet" href="/assets/css/assets/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/assets/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/assets/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="/assets/css/assets/slick.css">
    <link rel="stylesheet" href="/assets/css/assets/preloader.css" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="/assets/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="/assets/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="/assets/css/assets/revolution/settings.css">
    <!-- Mean Menu-->
    <link rel="stylesheet" href="/assets/css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/demo.css">
</head>

<body>
    <header class="header_four">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        @include('includes.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('includes.footer')

        <section id="scroll-top" class="scroll-top">
            <h2 class="disabled">Scroll to top</h2>
            <div class="to-top pos-rtive">
                <a href="#"><i class="flaticon-right-arrow"></i></a>
            </div>
        </section>
        <!-- JavaScript -->
        <script src="/assets/js/jquery-3.2.1.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Revolution Slider -->
        <script src="/assets/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="/assets/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/jquery.meanmenu.min.js"></script>
        <!-- Counter Script -->
        <script src="/assets/js/waypoints.min.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <!-- Revolution Extensions -->
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/assets/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
        <script src="/assets/js/assets/revolution/revolution.js"></script>
        <script src="/assets/js/custom.js"></script>
</body>

</html>