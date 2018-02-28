@extends('_includes.base')

@section('pageTitle')
    Portfolio
@stop

@section('body')

    <section id="portfolio-section" class="portfolio-section section">
        <h2 class="section-title">Portfolio</h2>
        <ul id="filters" class="filters clearfix">
            <li class="type active" data-filter="*">All</li>
            <li class="type" data-filter=".backend">Back-end</li>
            <li class="type" data-filter=".frontend">Front-end</li>
        </ul><!--//filters-->
        <div class="items-wrapper isotope row col-eq">
            @foreach($projects_A as $project)
                <article class="item {{$project['type']}} col-lg-3 col-6">
                    <div class="item-inner">
                        <figure class="figure">
                            <img class="img-fluid" src="assets/images/portfolio/{{$project['image']}}" alt="" />
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="#">{{$project['title']}}</a></h3>
                            <div class="meta">{{$project['description']}}</div>
                        </div><!--//content-->    
                        <a class="link-mask" href="{{$project['url']}}"></a>              
                    </div><!--//item-inner-->
                </article><!--//item-->
            @endforeach
            @foreach($projects_B as $project)
                <article class="item {{$project['type']}} col-lg-3 col-6">
                    <div class="item-inner">
                        <figure class="figure">
                            <img class="img-fluid" src="assets/images/portfolio/{{$project['image']}}" alt="" />
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="#">{{$project['title']}}</a></h3>
                            <div class="meta">{{$project['description']}}</div>
                        </div><!--//content-->    
                        <a class="link-mask" href="{{$project['url']}}"></a>              
                    </div><!--//item-inner-->
                </article><!--//item-->
            @endforeach
        </div><!--//item-wrapper-->
    </section><!--//section-->

    @php 
        $sum = 0;
        foreach ($top_skills as $skill)
            $sum += $skill['count'];
        foreach ($skills as $skill)
            $sum += $skill['count'];
    @endphp
    <section id="skills-section" class="skills-section section text-center">
        <h2 class="section-title">Professional Skills</h2>
        <div class="top-skills">
        <h3 class="subtitle">Top Skills {{ $sum }}</h3>
            <div class="row">
                @foreach($top_skills as $skill)
                        <div class="item col-12 col-md-4">
                            <div class="item-inner">
                                <div class="chart-easy-pie text-center">
                                    <div class="chart" data-bar-color="#607D8B" data-percent="{{$skill['level']}}"><span>{{$skill['level']}}</span>%</div>
                                </div>
                                <h4 class="skill-name">{{$skill['title']}}</h4>
                                <div class="level">Advanced, 4 years</div>
                                <div class="desc">
                                    {{$skill['description']}} 
                                </div>
                            </div><!--//item-inner-->
                        </div><!--//item-->
                @endforeach
                @foreach($skills as $skill)
                        <div class="item col-12 col-md-4">
                            <div class="item-inner">
                                <div class="chart-easy-pie text-center">
                                    <div class="chart" data-bar-color="#607D8B" data-percent="{{$skill['level']}}"><span>{{$skill['level']}}</span>%</div>
                                </div>
                                <h4 class="skill-name">{{$skill['title']}}</h4>
                                <div class="level">Advanced, 4 years</div>
                                <div class="desc">
                                    {{$skill['description']}} 
                                </div>
                            </div><!--//item-inner-->
                        </div><!--//item-->
                @endforeach
            </div><!--//row-->
        </div><!--//top-skills-->
        <div class="other-skills">
        <h3 class="subtitle">Other Skills {{count($other_skills)}}</h3>
            <div class="misc-skills">
                @foreach($other_skills as $skill)
                    <span class="skill-tag">{{$skill}}</span>
                @endforeach
            </div>
        </div><!--//other-skills-->
    </section><!--//skills-section-->

    <section id="experiences-section" class="experiences-section section">
        <h2 class="section-title">Experiences</h2>
        <div class="timeline">
            @foreach ($experiences as $experience)
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">{{$experience['company']}}</h3>
                        <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$experience['location']}}</div>
                    </div>
                    <div class="job-meta">
                        <div class="title">{{$experience['title']}}</div>
                        <div class="time">{{$experience['time']}}</div>
                    </div><!--//job-meta-->
                    <div class="job-desc">
                        <p>{{$experience['details']}}</p> 
                        <ul>
                            <li><a href="{{$experience['annexe']}}">Project repository on Github</a></li>
                        </ul>
                    </div><!--//job-desc-->
                </div><!--//item-->
            @endforeach
        </div><!--//timeline-->
    </section><!--//section-->

    <section id="organisations-section" class="experiences-section section">
        <h2 class="section-title">Organisations</h2>
        <div class="timeline">
            @foreach ($organisations as $organisation)
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">{{$organisation['company']}}</h3>
                        <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$organisation['location']}}</div>
                    </div>
                    <div class="job-meta">
                        <div class="title">{{$organisation['title']}}</div>
                        <div class="time">{{$organisation['time']}}</div>
                    </div><!--//job-meta-->
                    <div class="job-desc">
                        <p>{{$organisation['details']}}</p>
                        <ul>
                            <li><a href="files/{{$organisation['annexe']}}">Certificate of Participation - IEEEXtreme 11.0</a></li>
                        </ul>
                    </div><!--//job-desc-->
                </div><!--//item-->
            @endforeach
        </div><!--//timeline-->
    </section><!--//section-->
        
    <section id="education-section" class="education-section section">
        <h2 class="section-title">Education</h2>
        <div class="row">
            @foreach($education as $e)
                <div class="item col-12 col-md-4">
                    <div class="item-inner">
                        <h3 class="degree">{{$e['title']}}</h3>
                        <div class="education-body">
                            {{$e['university']}}
                        </div><!--//education-body-->
                        <div class="time">{{$e['period']}}</div>
                        {{--  <div class="desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient 
                        </div>  --}}
                    </div><!--//item-inner-->
                </div><!--//item-->
            @endforeach
        </div><!--//row-->
    </section><!--//section-->
        
    {{--  <section id="testimonials-section" class="testimonials-section section">
        <h2 class="section-title">Testimonials</h2>
        
        <div id="testimonials-carousel" class="testimonials-carousel carousel slide" data-interval="8000">
            
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <blockquote class="quote">      
                        <i class="fa fa-quote-left"></i>                            
                        <p>James is an excellent software engineer and he is passionate about what he does. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse porttitor metus eros.</p>
                    </blockquote>    
                    <div class="source">
                        <div class="name">Rob Olson</div>
                        <div class="position">Product Manager, Apple</div>
                    </div><!--//source-->   
                                                    
                </div><!--//item-->
                <div class="item carousel-item">
                    <blockquote class="quote">
                        <p><i class="fa fa-quote-left"></i>
                        Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                        
                    </blockquote>
                    <div class="source">
                        <div class="name">Christina Jensen</div>
                        <div class="position">Senior Developer, Twitter</div>
                    </div><!--//source-->   
            
                </div><!--//item-->
                <div class="item carousel-item">
                    <blockquote class="quote">
                        <p><i class="fa fa-quote-left"></i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                    </blockquote>       
                    <div class="source">
                        <div class="name">Austin Ward</div>
                        <div class="position">CEO, Startup Hub</div>
                    </div><!--//source-->          
                </div><!--//item-->
                
            </div><!--//carousel-inner-->
        </div><!--//testimonials-carousel-->
    </section><!--//section-->  --}}

    <section id="contact-section" class="contact-section section">
        <h2 class="section-title">Get in Touch</h2>
        <div class="intro">
            <img class="profile-image cs-profile" src="@url('assets/images/profile/profile.jpg')" alt="">
            <div class="dialog">
            <p>{{$contact}}</p>
                <p><strong>I can help with the following:</strong></p>
                <ul class="list-unstyled service-list">
                    <li><i class="fa fa-check" aria-hidden="true"></i> App development with Onsen UI</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Front-end development with Vue.js</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Back-end development with Laravel</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> UI development</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> UX prototyping</li>
                </ul>
                <p>Drop me a line at <a href="{{'mailto:'.$email}}">{{$email}}</a> or call me from whatsapp.</p>
                <ul class="social list-inline">
                    <li class="list-inline-item"><a href="{{'https://www.'.$linkedIn}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="{{'https://twitter.com/'.$twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="{{'https://www.youtube.com/'.$youtube}}"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="{{'https://'.$github}}"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="{{'http://'.$website}}"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                    </ul><!--//social-->
            </div><!--//diaplog-->
        </div><!--//intro-->
    </section><!--//section-->
    
@stop
