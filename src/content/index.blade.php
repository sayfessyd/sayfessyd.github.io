@extends('_includes.base')

@section('body')

    <!-- ################################ -->
    <!-- ############ HEADER ############ -->
    <!-- ################################ -->

    <section class="o-section o-section--header  t-section  t-section--header">
        <div class="c-header">

            <div class="o-section__header-bg  t-section__header"></div>
            <div class="o-section__content-bg  t-section__content"></div>

            <div class="o-container">
                <div class="o-section__container">

                    <header class="o-section__header  c-header__header  t-section__header">
                        <div class="c-header__inner-header">

                            <div class="c-header__avatar">
                                <div class="a-header  c-avatar">
                                    <img class="c-avatar__img" src="assets/images/profile/profile.jpg" alt="">
                                </div><!-- /c-avatar -->
                            </div><!-- /c-header-avatar -->

                        </div><!-- /c-header__inner-header -->
                    </header><!-- /o-section__header -->

                    <div class="o-section__content  c-header__content  t-section__content">
                        <div class="c-header__inner-content">

                            <div class="c-header__top">

                                <div class="c-header__brand">

                                    <div class="c-brand">
                                        <h1 class="c-brand__title  t-title">
                                            <span class="c-brand__sizer">
                                                <span class="a-header  c-brand__first-word  t-title__first-word">
                                                    {{$firstname}}
                                                </span>
                                                <span class="a-header  c-brand__second-word  t-title__second-word">
                                                    {{$lastname}}
                                                </span>
                                            </span>
                                        </h1>
                                        <h2 class="a-header  c-brand__sub-title  t-sub-title">
                                            <span class="c-brand__sizer">
                                                {{$header}}
                                            </span>
                                        </h2>
                                    </div><!-- /c-brand -->

                                </div><!-- /c-header__brand -->

                                <ul class="c-header__social-buttons  c-social-buttons">
                                    <li class="a-header">
                                        <a style="cursor:pointer" onclick="changeCSS(7)" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-lightbulb-o"></i>
                                        </a>
                                    </li>
                                    <li class="a-header">
                                        <a href="{{$profiles['facebook']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="a-header">
                                        <a href="{{$profiles['instagram']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="a-header">
                                        <a href="{{$profiles['twitter']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="a-header">
                                        <a href="{{$profiles['linkedin']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul><!-- /c-header__social-buttons -->

                            </div><!-- /c-header__top -->

                            <div class="c-header__contact">

                                <hr class="a-header  c-header__contact-divider" />

                                <div class="o-grid">

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="a-header  o-content">
                                            <div class="o-content__body">
                                                <a href="https://www.google.com/maps/place/{{$location}}" target="_blank" class="t-link-container">
                                                    <h4>Location</h4>
                                                    <address>
                                                        <span class="t-link-container__item--blended">
                                                            {{$location}}
                                                        </span>
                                                    </address>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="a-header  o-content">
                                            <div class="o-content__body">
                                                <a href="tel:{{$tel}}" target="_blank" class="t-link-container">
                                                    <h4>Phone</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            {{$tel}}
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="a-header  o-content">
                                            <div class="o-content__body">
                                                <a href="http://{{$website}}" target="_blank" class="t-link-container">
                                                    <h4>Web</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            {{$website}}
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="a-header  o-content">
                                            <div class="o-content__body">
                                                <a href="mailto:{{$email}}" target="_blank" class="t-link-container">
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            {{$email}}
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                </div><!-- /o-grid -->
                            </div><!-- /c-header__contact -->

                        </div><!-- /c-header__inner-content -->
                    </div><!-- /o-section__content -->

                </div><!-- /o-section__container -->

            </div><!-- /o-container -->

        </div><!-- /c-header -->
    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ############ INTRO ############# -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Intro
                        </h2>
                        <div class="o-content__body  o-section__description">
                            What I am all about.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                    <div class="o-content">
                        <div class="c-intro">
                            <div class="o-content__body">
                                <p>
                                    {{$about}}
                                    </b></b>
                                    {{$about_b}}    
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ########## EXPERTISE ########### -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Expertise
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Batman would be jealous.
                        </div>
                    </div>
                </header>

                <div class="o-section__content  t-section__content  ">
                    
                    <div class="o-grid">
                        @php $ex=0 @endphp
                        @foreach($expertise as $e)

                        <div class="o-grid__col-sm-6">
                            <div class="o-media  o-media--block  o-content">
                                <div class="o-media__figure">
                                    <div class="c-number  t-primary-color">
                                        0{{++$ex}}
                                    </div>
                                </div>
                                <div class="o-media__body  o-content__body">
                                    <h3>{{$e['name']}}</h3>
                                    <p>
                                        {{$e['details']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>

    </section> 



    <!-- ################################ -->
    <!-- ############ SKILLS ############ -->
    <!-- ################################ -->

    @php 
        $sum = 0;
        foreach ($skills as $skill)
            $sum += $skill['count'];
    @endphp

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            {{$sum}} Skills
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Progress bars, anyone?
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                    <div class="o-grid">

                        @foreach ($skills as $skill)
                            <div class="o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-media  o-media--block">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                            {{$skill['level']}}<small>%</small>
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            <h3>{{$skill['title']}}</h3>
                                        </div>
                                    </div>
                                    <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                        <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="{{$skill['level']}}"></div>
                                    </div>
                                </div>
                            </div><!-- /o-grid__col -->
                        @endforeach

                    </div><!-- /o-grid -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ########## EXPERIENCE ########## -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Experience
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Yes. I&#39;ve been around.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  u-pb-0">
                    
                    <div class="a-experience-timeline  c-timeline  t-border-color">

                        @foreach ($experiences as $experience)
                            <div class="c-timeline__item">
                                <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                <div class="o-content">
                                    <div class="o-grid">
                                        <div class="o-grid__col-md-5">
                                            <div class="c-work__timeframe">
                                                {{$experience['time']}}
                                            </div>
                                            <h3 class="c-work__heading">
                                                {{$experience['company']}}
                                            </h3>
                                            <h4 class="c-work__title">
                                                {{$experience['title']}}
                                            </h4>
                                            <div class="c-work__location">
                                                {{$experience['location']}}
                                            </div>
                                        </div>
                                        <div class="o-grid__col-md-7">
                                            <p>
                                                {{$experience['details']}}
                                            </p>
                                        </div>
                                    </div><!-- /o-grid -->
                                </div><!-- /o-content -->
                            </div><!-- /c-timeline__item -->
                        @endforeach

                    </div><!-- /c-timeline -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ########### EDUCATION ########## -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Education
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Lazy isn&#39;t in my vocabulary.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  u-pt-0">
                    
                    <div class="o-content">
                        <div class="a-education-timeline  c-timeline  t-border-color  o-section__full-top-space">
                            <div class="c-timeline__end  t-border-color"></div>

                            @foreach($education as $e)
                                <div class="c-timeline__item">
                                    <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">
                                                <div class="c-work__timeframe">
                                                    {{$e['period']}}
                                                </div>
                                                <h3 class="c-work__heading">
                                                    {{$e['title']}}
                                                </h3>
                                                <h4 class="c-work__title">
                                                    {{$e['university']}}
                                                </h4>
                                                <div class="c-work__location">
                                                    {{$e['location']}}
                                                </div>
                                            </div>
                                             <div class="o-grid__col-md-7">
                                                <p>
                                                    {{$e['details']}}
                                                </p>
                                            </div> 
                                        </div><!-- /o-grid -->
                                    </div><!-- /o-content -->
                                </div><!-- /c-timeline__item -->
                            @endforeach

                           

                            

                        </div><!-- /c-timeline -->
                    </div><!-- /o-content -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ########### PROFILES ########### -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Profiles
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Busy as usual.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                    <div class="o-grid">

                        <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                            <div class="o-content">
                                <a href="{{$profiles['play']}}" target="_blank" class="t-link-container">
                                    <div class="o-media  o-media--block">
                                        <div class="o-media__figure">
                                            <div class="c-profile__icon">
                                                <i class="fa  fa-lg  fa-android"></i>
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3 class="t-link-container__item">
                                                Google Play
                                            </h3>
                                            <p>
                                                An overview of the mobile applications that I developed, with over 10K downloads
                                            </p>
                                        </div>
                                    </div><!-- /o-media -->
                                </a><!-- /t-link-container -->
                            </div><!-- /o-content -->
                        </div><!-- /o-grid__col -->

                        

                        <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                            <div class="o-content">
                                <a href="{{$profiles['github']}}" target="_blank" class="t-link-container">
                                    <div class="o-media  o-media--block">
                                        <div class="o-media__figure">
                                            <div class="c-profile__icon">
                                                <i class="fa  fa-lg  fa-github-alt"></i>
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3 class="t-link-container__item">
                                                GitHub
                                            </h3>
                                            <p>
                                                You find all my open source projects on GitHub. I have until now over 10 original projects.
                                            </p>
                                        </div>
                                    </div><!-- /o-media -->
                                </a><!-- /t-link-container -->
                            </div><!-- /o-content -->
                        </div><!-- /o-grid__col -->


                        <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                            <div class="o-content">
                                <a href="{{$profiles['youtube']}}" target="_blank" class="t-link-container">
                                    <div class="o-media  o-media--block">
                                        <div class="o-media__figure">
                                            <div class="c-profile__icon">
                                                <i class="fa  fa-lg  fa-youtube"></i>
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3 class="t-link-container__item">
                                                Youtube
                                            </h3>
                                            <p>
                                                Yes. I'm also a musician and here you find my youtube channel with over 400K Views.
                                            </p>
                                        </div>
                                    </div><!-- /o-media -->
                                </a><!-- /t-link-container -->
                            </div><!-- /o-content -->
                        </div><!-- /o-grid__col -->


                    </div><!-- /o-grid -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ########### PORTFOLIO ########## -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Portfolio
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Here it gets interesting.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  o-section__full-bottom-space">
                    
                    <div class="o-grid  o-grid--gallery">

                        @foreach($projects as $project)
                            <div class="o-grid__col-sm-6">
                                <a class="c-image-overlay  t-image-overlay  js-lightbox" href="{{$project['url']}}" data-lightbox-hidpi="" title="{{$project['title']}}" data-lightbox-gallery="portfolio">
                                    <img src="assets/images/portfolio/{{$project['image']}}" alt="">
                                    <div class="c-image-overlay__content">
                                        <h3>
                                            {{$project['title']}}
                                        </h3>
                                        <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                        <p>
                                            {{$project['description']}}
                                        </p>
                                    </div>
                                </a>
                            </div><!-- /o-grid__col -->
                        @endforeach
                       

                    </div><!-- /o-grid -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->


    <!-- ################################ -->
    <!-- ############ HEADER ############ -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Organisations
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Happy times!
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                    <div class="o-grid">
                        @foreach ($organisations as $organisation)
                            <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                <div class="o-content">
                                    <hr class="c-deco-line  t-primary-color-line" />
                                    <div class="o-content__body">
                                        <h3>{{$organisation['company']}}</h3>
                                        <p>
                                            {{$organisation['details']}}
                                        </p>
                                    </div>
                                </div><!-- /o-content -->
                            </div><!-- /o-grid__col -->
                        @endforeach
                    </div><!-- /o-grid -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section>


    <!-- ################################ -->
    <!-- ############ CLIENTS ########### -->
    <!-- ################################ -->

    <section class="o-section  t-section  ">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Clients
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Happy people.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                    <ul class="c-clients  o-content">
                        
                        <li>
                            <a href="https://codecanyon.net" target="_blank">
                                <img src="assets/images/clients/codecanyon-logo.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="https://play.google.com" target="_blank">
                                <img src="assets/images/clients/play2.png" alt="">
                            </a>
                        </li>
                    </ul><!-- /o-float-box -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->



    <!-- ################################ -->
    <!-- ############ FOOTER ############ -->
    <!-- ################################ -->

    <section class="o-section  t-section  o-section--footer">

        <div class="o-section__header-bg  t-section__header"></div>
        <div class="o-section__content-bg  t-section__content"></div>

        <div class="o-container">
            <div class="o-section__container">

                <header class="o-section__header  t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Contact
                        </h2>
                        <div class="o-content__body  o-section__description">
                            Call me, maybe.
                        </div>
                    </div>
                </header><!-- /o-section__header -->

                <div class="o-section__content  t-section__content  ">
                    
                        <div class="c-footer__contact">
                            <div class="o-grid">

                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-content__body">
                                        <a href="https://www.google.com/maps/place/{{$location}}" target="_blank" class="t-link-container">
                                            <h4>Location</h4>
                                            <address>
                                                <span class="t-link-container__item--blended">
                                                    {{$location}}
                                                </span>
                                            </address>
                                        </a><!-- /o-link-container -->
                                    </div>
                                </div><!-- /o-content -->
                            </div><!-- /o-grid__col -->

                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-content__body">
                                        <a href="tel:{{$tel}}" target="_blank" class="t-link-container">
                                            <h4>Phone</h4>
                                            <p>
                                                <span class="t-link-container__item--blended">
                                                    {{$tel}}
                                                </span>
                                            </p>
                                        </a><!-- /o-link-container -->
                                    </div>
                                </div><!-- /o-content -->
                            </div><!-- /o-grid__col -->

                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-content__body">
                                        <a href="http://{{$website}}" target="_blank" class="t-link-container">
                                            <h4>Web</h4>
                                            <p>
                                                <span class="t-link-container__item--blended">
                                                    {{$website}}
                                                </span>
                                            </p>
                                        </a><!-- /o-link-container -->
                                    </div>
                                </div><!-- /o-content -->
                            </div><!-- /o-grid__col -->

                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-content__body">
                                        <a href="mailto:{{$email}}" target="_blank" class="t-link-container">
                                            <h4>Email</h4>
                                            <p>
                                                <span class="t-link-container__item--blended">
                                                    {{$email}}
                                                </span>
                                            </p>
                                        </a><!-- /o-link-container -->
                                    </div>
                                </div><!-- /o-content -->
                            </div><!-- /o-grid__col -->

                        </div><!-- /o-grid -->
                        </div><!-- /c-footer__contact -->

                        <hr class="c-footer__contact-divider" />

                        <div class="o-content">
                            <div class="c-footer__bottom">
                                <div class="c-footer__brand">

                                    <div class="c-brand">
                                        <div class="o-content__body">
                                            <h1 class="c-brand__title  t-title">
                                                <span class="c-brand__sizer  c-brand__sizer--sm">
                                                    <span class="a-footer  c-brand__first-word  t-title__first-word">
                                                        {{$firstname}}
                                                    </span>
                                                    <span class="a-footer  c-brand__second-word  t-title__second-word">
                                                        {{$lastname}}
                                                    </span>
                                                </span>
                                            </h1>
                                        </div><!-- /o-content__body -->
                                    </div><!-- /c-brand -->

                                </div><!-- /c-footer__brand -->

                                <ul class="c-footer__social-buttons  c-social-buttons  o-content__body">
                                    <li class="a-footer">
                                        <a style="cursor:pointer" onclick="changeCSS(7)" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-lightbulb-o"></i>
                                        </a>
                                    </li>
                                    <li class="a-footer">
                                        <a href="{{$profiles['facebook']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="a-footer">
                                        <a href="{{$profiles['instagram']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="a-footer">
                                        <a href="{{$profiles['twitter']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="a-footer">
                                        <a href="{{$profiles['linkedin']}}" target="_blank" class="c-social-button  t-social-button">
                                            <i class="fa  fa-lg  fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul><!-- /c-footer__social-buttons -->

                            </div><!-- /c-footer__bottom -->
                        </div><!-- /o-content -->

                </div><!-- /o-section__content -->

            </div><!-- /o-section__container -->
        </div><!-- /o-container -->

    </section><!-- /o-section -->

@stop