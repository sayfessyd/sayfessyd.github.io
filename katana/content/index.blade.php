@extends('_includes.base')

@section('body')
    <div class="sidebar-wrapper">
        @include('_includes.sidebar')
    </div>
    <div class="main-wrapper">
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                <ul class="list-unstyled">
                    <li><img class="emojione" alt="💎" src="//cdn.jsdelivr.net/emojione/assets/png/1f48e.png?v=2.2.6"> Full Stack Developer,  Creator of Lollipop image editor</li>
                    <li><img class="emojione" alt="🖥" src="//cdn.jsdelivr.net/emojione/assets/png/1f5a5.png?v=2.2.6"> UI Designer</li>
                    <li><img class="emojione" alt="🎓" src="//cdn.jsdelivr.net/emojione/assets/png/1f393.png?v=2.2.6"> Student at the Higher Institute of Computer Science (Engineer's degree)</li>
                    <li><img class="emojione" alt="🎹" src="//cdn.jsdelivr.net/emojione/assets/png/1f3b9.png?v=2.2.6"> Pianist and Composer in my spare time <img class="emojione" alt="😋" src="//cdn.jsdelivr.net/emojione/assets/png/1f60b.png?v=2.2.6"></li></ul>
            </div>
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Frontend / Backend Developer</h3>
                        <div class="time">February 2016</div>
                    </div>
                    <div class="company">BNA Bank</div>
                </div>
                <div class="details">
                    <p>Develop a Java EE web application that allows the management of promissory notes.</p>
                </div>
            </div>
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-users"></i>Organisations</h2>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">IEEE Member</h3>
                        <div class="time">December 2016</div>
                    </div>
                    <div class="company">IEEE Tunisia Section</div>
                </div>
                <div class="details">
                    <p>A member of the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.</p>
                    <a href="/Certificate of Participation - IEEEXtreme 11.0 - Saifeddine Essid.pdf">Certificate of Participation - IEEEXtreme 11.0</a>
                </div>
            </div>
        </section>
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects ² {{count($projects_A)}}</h2>
            @foreach ($projects_A as $project)
                <div class="item">
                    <div class="upper-row">
                        <h3 class="job-title">{{$project['job']}}</h3>
                        <div class="time">{{$project['period']}}</div>
                    </div>
                    <span class="project-title"><a href="{{$project['url']}}" target="_blank">{{$project['title']}}</a></span>
                    <span class="project-tagline">{{$project['description']}}</span>
                </div>
            @endforeach
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects {{count($projects_B)}}</h2>
            @foreach ($projects_B as $project)
                <div class="item">
                    <div class="upper-row">
                        <h3 class="job-title">{{$project['job']}}</h3>
                        <div class="time">{{$project['period']}}</div>
                    </div>
                    <span class="project-title"><a href="{{$project['url']}}" target="_blank">{{$project['title']}}</a></span>
                    <span class="project-tagline">{{$project['description']}}</span>
                </div>
            @endforeach
        </section>
        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            <div class="skillset">
                @foreach ($skills as $skill)
                    <div class="item">
                        <h3 class="level-title">{{$skill['title']}}</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="{{$skill['level']}}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@stop
