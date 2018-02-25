<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} - @yield('pageTitle')</title>

    <link rel="shortcut icon" href="@url('resume/assets/favicon.ico')">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('resume/assets/plugins/bootstrap/css/bootstrap.min.css')">
    <link rel="stylesheet" href="@url('resume/assets/plugins/font-awesome/css/font-awesome.css')">
    <link rel="stylesheet" href="@url('resume/assets/css/styles-6.css')">
    <link rel="stylesheet" href="@url('resume/assets/css/custom.css')">
    <link rel="stylesheet" href="@url('resume/assets/css/emojione.min.css')" />

</head>

<body>
    <div id="resume" class="wrapper">
        @yield('body')
    </div>
    <footer class="footer">
        <div class="text-center">
            <small class="copyright">© Sayf Essyd <script>document.write(new Date().getFullYear())</script></small>
            <a class="btn" href="javascript:pdfVersion()"><i class="fa fa-download" aria-hidden="true"></i> PDF Version</a>
        </div>
    </footer>
    <script type="text/javascript" src="@url('resume/assets/plugins/jquery-1.11.3.min.js')"></script>
    <script type="text/javascript" src="@url('resume/assets/plugins/bootstrap/js/bootstrap.min.js')"></script>
    <script type="text/javascript" src="@url('resume/assets/plugins/html2pdf.bundle.min.js')"></script>
    <script type="text/javascript" src="@url('resume/assets/js/main.js')"></script>
</body>
</html>
