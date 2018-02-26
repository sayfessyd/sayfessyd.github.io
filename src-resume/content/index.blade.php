@extends('_includes.base')

@section('pageTitle')
    Resume
@stop

@section('body')
    <aside class="sidebar-wrapper">
        @include('_includes.sidebar')
    </aside>
    <main class="main-wrapper">
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                <ul class="list-unstyled">
                    <li><img class="emojione" alt="💎" src="//cdn.jsdelivr.net/emojione/assets/png/1f48e.png?v=2.2.6"> Full Stack Developer,  Creator of Lollipop image editor</li>
                    <li><img class="emojione" alt="🖥" src="//cdn.jsdelivr.net/emojione/assets/png/1f5a5.png?v=2.2.6"> UI Designer</li>
                    <li><img class="emojione" alt="🎓" src="//cdn.jsdelivr.net/emojione/assets/png/1f393.png?v=2.2.6"> Student at the Higher Institute of Computer Science (Engineer's degree)</li>
                    <li><img class="emojione" alt="🎹" src="//cdn.jsdelivr.net/emojione/assets/png/1f3b9.png?v=2.2.6"> Pianist and Composer in my spare time</li></ul>
            </div>
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
            @foreach ($experiences as $experience)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$experience['title']}}</h3>
                            <div class="time">{{$experience['time']}}</div>
                        </div>
                        <div class="company">{{$experience['company']}}</div>
                    </div>
                    <div class="details">
                        <p>{{$experience['details']}}</p>
                        <a href="{{$experience['annexe']}}">Project repository on Github</a>
                    </div>
                </div>
            @endforeach
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-users"></i>Organisations</h2>
            @foreach ($organisations as $organisation)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$organisation['title']}}</h3>
                            <div class="time">{{$organisation['time']}}</div>
                        </div>
                        <div class="company">{{$organisation['company']}}</div>
                    </div>
                    <div class="details">
                        <p>{{$organisation['details']}}</p>
                        <a href="/files/{{$organisation['annexe']}}">Certificate of Participation - IEEEXtreme 11.0</a>
                    </div>
                </div>
            @endforeach
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
                    <span class="project-tagline">{{$project['description']}} Technologies: {{$project['technologies']}}</span>
                </div>
            @endforeach
        </section>
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects {{count($projects_B)}}</h2>
            @foreach ($projects_B as $project)
                <div class="item">
                    <div class="upper-row">
                        <h3 class="job-title">{{$project['job']}}</h3>
                        <div class="time">{{$project['period']}}</div>
                    </div>
                    <span class="project-title"><a href="{{$project['url']}}" target="_blank">{{$project['title']}}</a></span>
                    <span class="project-tagline">{{$project['description']}} Technologies: {{$project['technologies']}}</span>
                </div>
            @endforeach
        </section>
        @php 
            $sum = 0;
            foreach ($top_skills as $skill)
                $sum += $skill['count'];
            foreach ($skills as $skill)
                $sum += $skill['count'];
        @endphp
        <section id="skills-section" class="skills-section section">
        <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency {{$sum}}</h2>
            <div class="skillset">
                @foreach ($top_skills as $skill)
                    <div class="item">
                        <h3 class="level-title">{{$skill['title']}}</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="{{$skill['level']}}">
                            </div>
                        </div>
                    </div>
                @endforeach
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
    </main>

@stop
