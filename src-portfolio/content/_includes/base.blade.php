<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>{{$siteName}} - @yield('pageTitle')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">
    <meta name="author" content="@yield('pageAuthor', $name)">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="@url('assets/plugins/bootstrap/css/bootstrap.min.css')">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="@url('assets/css/emojione.min.css')" />
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="@url('assets/css/styles-11.css')">
    <!-- Custom CSS -->  
    <link id="custom-style" rel="stylesheet" href="@url('assets/css/custom.css')">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    
    <header class="header">
        <div class="top-bar container-fluid">
            <div class="actions">
                <a class="btn d-none d-md-inline-block" href="{{'mailto: '.$email}}"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hire Me</a>
                <a class="btn" href="/resume" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View My Resume</a>
                <a class="btn" href="files/CV-Europass-20180211-Essid-FR.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Cv Europass Version</a>
            </div><!--//actions-->
            <ul class="social list-inline">
                <li class="list-inline-item"><a href="{{'https://'.$linkedIn}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{'https://twitter.com/'.$twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{'https://youtube.com/'.$youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{'https://'.$github}}"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="{{'http://'.$website}}"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            </ul><!--//social-->
        </div><!--//top-bar-->
        
        <div class="intro">
            <div class="container text-center">
                <img class="profile-image img-thumbnail cs-profile" src="{{$profile}}" alt="">
                <h1 class="name">{{$name}}</h1>
                <div class="title">Full Stack Developer</div>
                <div class="profile">
                    <p>Creator of Lollipop - Image Editor <img class="emojione" alt="🍭" src="//cdn.jsdelivr.net/emojione/assets/png/1f36d.png?v=2.2.6"> Student at the HI of Computer Science (Engineer's degree) <img class="emojione" alt="🎓" src="//cdn.jsdelivr.net/emojione/assets/png/1f393.png?v=2.2.6"> Pianist and Composer in my spare time ! <img class="emojione" alt="🎹" src="//cdn.jsdelivr.net/emojione/assets/png/1f3b9.png?v=2.2.6"> <img class="emojione" alt="😋" src="//cdn.jsdelivr.net/emojione/assets/png/1f60b.png?v=2.2.6"></p>
                </div><!--//profile-->
            </div><!--//container-->
        </div><!--//intro-->
        
        <div class="contact-info">
            <div class="container text-center">
                <ul class="list-inline">
                    <li class="email list-inline-item"><i class="fa fa-envelope"></i><a href="{{'mailto: '.$email}}">{{$email}}</a></li>
                    <li class="list-inline-item"><i class="fa fa-whatsapp"></i><a href="#">{{$tel}}</a></li>
                    <li class="website list-inline-item"><i class="fa fa-globe"></i><a href="{{'http://'.$website}}" target="_blank">{{$website}}</a></li>
                </ul>
            </div><!--//container-->
        </div><!--//contact-info-->
        
        <div class="page-nav-space-holder d-none d-md-block">
            <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
                <div class="container">
                    <ul id="page-nav" class="nav page-nav list-inline">
                        <li class="nav-item"><a class="scrollto nav-link" href="#portfolio-section">Portfolio</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#skills-section">Skills</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#experiences-section">Experiences</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#organisations-section">Organisations</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#education-section">Education</a></li>
                        {{--  <li class="nav-item"><a class="scrollto nav-link" href="#testimonials-section">Testimonials</a></li>  --}}
                        <li class="nav-item"><a class="scrollto nav-link" href="#contact-section">Contact</a></li>
                    </ul><!--//page-nav-->
                </div>
            </div><!--//page-nav-wrapper-->
        </div>
    </header><!--//header-->
    
    <div class="wrapper container">
        @yield('body')
    </div>
    
    <footer class="footer text-center">
        <div class="container">
            <small class="copyright">© Sayf Essyd <script>document.write(new Date().getFullYear())</script></small>
        </div><!--//container-->
    </footer>

    <!-- Javascript -->          
    <script type="text/javascript" src="@url('assets/plugins/jquery-3.2.1.min.js')"></script>
    <script type="text/javascript" src="@url('assets/plugins/popper.min.js')"></script> 
    <script type="text/javascript" src="@url('assets/plugins/bootstrap/js/bootstrap.min.js')"></script>  
    <script type="text/javascript" src="@url('assets/plugins/back-to-top.js')"></script>
    <script type="text/javascript" src="@url('assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js')"></script> 
    <script type="text/javascript" src="@url('assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js')"></script>
    <script type="text/javascript" src="@url('assets/plugins/imagesloaded.pkgd.min.js')"></script> 
    <script type="text/javascript" src="@url('assets/plugins/isotope.pkgd.min.js')"></script>  

    <!-- custom js -->
    <script type="text/javascript" src="@url('assets/js/main.js')"></script>

</body>
</html> 

