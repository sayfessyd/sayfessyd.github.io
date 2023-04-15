@extends('_includes.base')

@section('body')
    <!-- ################################ -->
    <!-- ############ HEADER ############ -->
    <!-- ################################ -->
    <section class="o-section o-section--header t-section t-section--header">
        <div class="c-header">
            <div class="o-section__header-bg t-section__header"></div>
            <div class="o-section__content-bg t-section__content"></div>
            <div class="o-container">
                <div class="o-section__container">
                    <header class="o-section__header c-header__header t-section__header">
                        @if(false)
                        <div class="c-header__inner-header">
                            <div class="c-header__avatar">
                                <div class="a-header c-avatar">
                                    <img class="c-avatar__img" src="assets/images/profile/profile.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                    </header>
                    <div class="o-section__content c-header__content t-section__content">
                        <div class="c-header__inner-content">
                            <div class="c-header__top">
                                <div class="c-header__brand">
                                    <div class="c-brand">
                                        <h1 class="c-brand__title t-title">
                                            <span class="c-brand__sizer">
                                                <span class="a-header c-brand__first-word t-title__first-word">
                                                    {{ $firstname }}
                                                </span>
                                                <span class="a-header c-brand__second-word t-title__second-word">
                                                    {{ $lastname }}
                                                </span>
                                            </span>
                                        </h1>
                                        <h2 class="a-header c-brand__sub-title t-sub-title">
                                            <span class="c-brand__sizer">
                                                {{ $header }}
                                            </span>
                                        </h2>
                                    </div>
                                </div>
                                @include('_shared.social', ['mode' => 'header'])
                            </div>
                            <div class="c-header__contact">
                                <hr class="a-header c-header__contact-divider" />
                                <div class="o-grid">
                                    <div class="o-grid__col-md-3 o-grid__col-sm-6">
                                        <div class="a-header o-content">
                                            <div class="o-content__body">
                                                <a href="mailto:{{ $email }}" target="_blank" class="t-link-container">
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            {{ $email }}
                                                        </span>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-grid__col-md-3 o-grid__col-sm-6">
                                        <div class="a-header o-content">
                                            <div class="o-content__body">
                                                <a href="https://www.google.com/maps/place/{{ $location }}" target="_blank" class="t-link-container">
                                                    <h4>Location</h4>
                                                    <address>
                                                        <span class="t-link-container__item--blended">
                                                            {{ $location }}
                                                        </span>
                                                    </address>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################ -->
    <!-- ############ INTRO ############# -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Intro
                        </h2>
                        <div class="o-content__body o-section__description">
                            Who am I?
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content  ">
                    <div class="o-content">
                        <div class="c-intro">
                            <div class="o-content__body">
                                <p>{!! $about !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(false)
    <!-- ################################ -->
    <!-- ########### PORTFOLIO ########## -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Portfolio
                        </h2>
                        <div class="o-content__body o-section__description">
                            Products
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content o-section__full-bottom-space">
                    <div class="o-grid o-grid--gallery">
                        @foreach($projects as $project)
                            <div class="o-grid__col-sm-6">
                                <a class="c-image-overlay t-image-overlay js-lightbox" href="{{ $project['url'] }}" data-lightbox-hidpi="" title="{{ $project['title'] }}" data-lightbox-gallery="portfolio">
                                    <img src="assets/images/portfolio/{{ $project['image'] }}" alt="">
                                    <div class="c-image-overlay__content">
                                        <h3>
                                            {{ $project['title'] }}
                                        </h3>
                                        <hr class="c-image-overlay__deco-line t-image-overlay__deco-line" />
                                        <p>
                                            {{ $project['description'] }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @php
        $sum = 0;
        foreach ($skills as $skill)
            $sum += $skill['count'];
    @endphp
    @if(false)
    <!-- ################################ -->
    <!-- ############ SKILLS ############ -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            I have {{ $sum }} Skills
                        </h2>
                        <div class="o-content__body o-section__description">
                            Languages and Frameworks skills
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content">
                    <div class="o-grid">
                        @foreach ($skills as $skill)
                            <div class="o-grid__col-sm-6">
                                <div class="o-content">
                                    <div class="o-media o-media--block">
                                        <div class="o-media__figure">
                                            <div class="c-number t-primary-color">
                                                {{ $skill['level'] }}<small>%</small>
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            <h3>{{ $skill['title'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="c-progress-bar o-content__body t-border-color-bg u-mt-text">
                                        <div class="a-progress-bar c-progress-bar__filler t-primary-bg" data-percent="{{ $skill['level'] }}"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- ################################ -->
    <!-- ########## EXPERIENCE ########## -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Experience
                        </h2>
                        <div class="o-content__body o-section__description">
                            Accomplishments
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content u-pb-0">
                    <div class="a-experience-timeline c-timeline t-border-color">
                        @foreach ($experiences as $experience)
                            <div class="c-timeline__item">
                                <div class="c-timeline__point t-timeline__point t-primary-bg"></div>
                                <div class="o-content">
                                    <div class="o-grid">
                                        <div class="o-grid__col-md-5">
                                            <div class="c-work__timeframe">
                                                {{ $experience['time'] }}
                                            </div>
                                            <h3 class="c-work__heading">
                                                {{ $experience['company'] }}
                                            </h3>
                                            <h4 class="c-work__title">
                                                {{ $experience['title'] }}
                                            </h4>
                                            <div class="c-work__location">
                                                {{ $experience['location'] }}
                                            </div>
                                        </div>
                                        <div class="o-grid__col-md-7">
                                            <p>
                                                {{ $experience['details'] }}
                                            </p>
                                        </div>
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
    <!-- ########### EDUCATION ########## -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Education
                        </h2>
                        <div class="o-content__body o-section__description">
                            Courses
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content u-pt-0">
                    <div class="o-content">
                        <div class="a-education-timeline c-timeline t-border-color o-section__full-top-space">
                            <div class="c-timeline__end t-border-color"></div>
                            @foreach($education as $e)
                                <div class="c-timeline__item">
                                    <div class="c-timeline__point t-timeline__point t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">
                                                <div class="c-work__timeframe">
                                                    {{ $e['period'] }}
                                                </div>
                                                <h3 class="c-work__heading">
                                                    {{ $e['title'] }}
                                                </h3>
                                                <h4 class="c-work__title">
                                                    {{ $e['university'] }}
                                                </h4>
                                                <div class="c-work__location">
                                                    {{ $e['location'] }}
                                                </div>
                                            </div>
                                             <div class="o-grid__col-md-7">
                                                <p>
                                                    {{ $e['details'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(false)
    <!-- ################################# -->
    <!-- #### WORLDWIDE ORGANISATIONS #### -->
    <!-- ################################# -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Organizations
                        </h2>
                        <div class="o-content__body o-section__description">
                            Worldwide organizations
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content">
                    <div class="o-grid">
                       @foreach ($organizations as $organization)
                            <div class="o-grid__col-md-4 o-grid__col-sm-6">
                                <div class="o-content">
                                    <hr class="c-deco-line t-primary-color-line" />
                                    <div class="o-content__body">
                                        <h3><a href="{{ $organization['href'] }}">{{ $organization['company'] }}</a></h3>
                                        <p>{{ $organization['details'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(false)
    <!-- ################################ -->
    <!-- ############ CLIENTS ########### -->
    <!-- ################################ -->
    <section class="o-section t-section">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Clients
                        </h2>
                        <div class="o-content__body o-section__description">
                            Happy customers
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content">
                    <ul class="c-clients o-content">
                        <li>
                            <a href="https://codecanyon.net" target="_blank">
                                <img src="assets/images/clients/codecanyon-logo.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://play.google.com" target="_blank">
                                <img src="assets/images/clients/playstore-logo.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- ################################ -->
    <!-- ############ FOOTER ############ -->
    <!-- ################################ -->
    <section class="o-section t-section o-section--footer">
        <div class="o-section__header-bg t-section__header"></div>
        <div class="o-section__content-bg t-section__content"></div>
        <div class="o-container">
            <div class="o-section__container">
                <header class="o-section__header t-section__header">
                    <div class="o-content">
                        <h2 class="o-section__heading">
                            Contact
                        </h2>
                        <div class="o-content__body o-section__description">
                            Reach me out
                        </div>
                    </div>
                </header>
                <div class="o-section__content t-section__content  ">
                        <div class="c-footer__contact">
                            <div class="o-grid">
                                <div class="o-grid__col-md-3 o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-content__body">
                                            <a href="mailto:{{ $email }}" target="_blank" class="t-link-container">
                                                <h4>Email</h4>
                                                <p>
                                                    <span class="t-link-container__item--blended">
                                                        {{ $email }}
                                                    </span>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-grid__col-md-3 o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-content__body">
                                            <a href="https://www.google.com/maps/place/{{ $location }}" target="_blank" class="t-link-container">
                                                <h4>Location</h4>
                                                <address>
                                                    <span class="t-link-container__item--blended">
                                                        {{ $location }}
                                                    </span>
                                                </address>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="c-footer__contact-divider" />
                        <div class="o-content">
                            <div class="c-footer__bottom">
                                <div class="c-footer__brand">
                                    <div class="c-brand">
                                        <div class="o-content__body">
                                            <h1 class="c-brand__title t-title">
                                                <span class="c-brand__sizer c-brand__sizer--sm">
                                                    <span class="a-footer c-brand__first-word t-title__first-word">
                                                        {{ $firstname }}
                                                    </span>
                                                    <span class="a-footer c-brand__second-word t-title__second-word">
                                                        {{ $lastname }}
                                                    </span>
                                                </span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                @include('_shared.social', ['mode' => 'footer'])
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@stop
