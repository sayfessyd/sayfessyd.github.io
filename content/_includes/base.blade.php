<!doctype html>
<html lang="en">
    <head>
        <title>{{ $siteName }}</title>
        <link rel="shortcut icon" href="">
        <meta name="description" content="@yield('pageDescription', $siteDescription)">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="theme-color" content="#FFC300">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,900,900italic&subset=latin,latin-ext" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- Themes -->
        <link rel="stylesheet" href="assets/css/themes.light.css">
        <link rel="stylesheet" href="assets/css/themes.dark.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="assets/lib/fontawesome-free-6.4.2-web/css/all.min.css">
        <!-- Nivo Lightbox-->
        <link rel="stylesheet" href="assets/lib/nivo-lightbox/nivo-lightbox.css" />
        <link rel="stylesheet" href="assets/lib/nivo-lightbox/themes/default/default.css" />
    </head>

    <body>
        <div class="c-preloader  js-preloader">
            <div class="c-preloader__spinner  t-preloader__spinner"></div>
        </div>
        <div class="c-main-container  js-main-container">
            @yield('body')
        </div>

        <!-- Numeral -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
        <!-- Google Api -->
        <script src="https://apis.google.com/js/api.js"></script>
        <!-- jQuery -->
        <script src="assets/lib/jquery.min.js"></script>
        <!-- dense.js (Retina plugin) -->
        <script src="assets/lib/dense.js"></script>
        <!-- Nivo Lightbox -->
        <script src="assets/lib/nivo-lightbox/nivo-lightbox.min.js"></script>
        <!-- ScrollReveal -->
        <script src="assets/lib/scrollreveal.min.js"></script>
        <!-- Api JS -->
        <script src="assets/js/api.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116560666-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-116560666-1');
        </script>
    </body>
</html>
