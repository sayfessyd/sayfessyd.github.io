<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}}</title>

    <link rel="shortcut icon" href="/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('assets/plugins/bootstrap/css/bootstrap.min.css')">
    <link rel="stylesheet" href="@url('assets/plugins/font-awesome/css/font-awesome.css')">
    <link rel="stylesheet" href="@url('assets/css/styles-6.css')">
    <link rel="stylesheet" href="@url('assets/css/custom.css')">
    <link rel="stylesheet" href="@url('assets/css/emojione.min.css')" />
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
    <div id="resume" class="wrapper">
        @yield('body')
    </div>
    <footer class="footer">
        <div class="text-center">
            <small class="copyright">© Sayf Essyd <script>document.write(new Date().getFullYear())</script></small>
        </div>
    </footer>
    <script src="@url('assets/plugins/jquery-1.11.3.min.js')"></script>
    <script src="@url('assets/plugins/bootstrap/js/bootstrap.min.js')"></script>
    <script src="@url('assets/js/main.js')"></script>
</body>
</html>
