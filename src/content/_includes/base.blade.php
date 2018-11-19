<!doctype html>

<html lang="en">

    <head>

        <title>{{$siteName}}</title>
        <link rel="shortcut icon" href="/favicon.ico">

        <meta name="description" content="@yield('pageDescription', $siteDescription)">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="theme-color" content="#4B6A78">
        
        <!-- Google Font: Lato -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,900,900italic&subset=latin,latin-ext" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

        <!-- Nivo Lightbox-->
        <link rel="stylesheet" href="assets/plugins/nivo-lightbox/nivo-lightbox.css" />
        <link rel="stylesheet" href="assets/plugins/nivo-lightbox/themes/default/default.css" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
        
        <!-- Themes -->
        <link rel="stylesheet" href="assets/css/themes.dark.css">
        <!--<link rel="stylesheet" href="assets/css/themes.dark.css">-->
        
        <!-- Custom CSS -->
        <!--<link rel="stylesheet" href="assets/css/custom.css">-->

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- dense.js (Retina plugin) -->
        <script src="assets/js/dense.js"></script>

        <!-- Nivo Lightbox -->
        <script src="assets/plugins/nivo-lightbox/nivo-lightbox.min.js"></script>

        <!-- ScrollReveal -->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116560666-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-116560666-1');
        </script>

    </head>

    <body>

        <div class="c-preloader  js-preloader">
            <div class="c-preloader__spinner  t-preloader__spinner"></div>
        </div>

        <div class="c-main-container  js-main-container">

            @yield('body')

        </div><!-- /c-main-container -->

    </body>

</html>