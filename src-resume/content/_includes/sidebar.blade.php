<div class="profile-container">
    <img class="profile" src="@url('resume/assets/images/profile/profile.jpg')" alt="Profile Image" />
    <h1 class="name">{{$name}}</h1>
    <h3 class="tagline"><i class="fa fa-diamond" aria-hidden="true"></i> Full Stack Developer
</h3>
</div>
<div class="contact-container container-block">
    <ul class="list-unstyled contact-list">
        <li class="email"><i class="fa fa-envelope"></i><a href="{{'mailto:'.$email}}">{{$email}}</a></li>
        <li class="website"><i class="fa fa-globe"></i><a href="{{'http://'.$website}}" target="_blank">{{$website}}</a></li>
        <li class="linkedin"><i class="fa fa-linkedin"></i><a href="{{'https://www.'.$linkedIn}}" target="_blank">{{$linkedIn}}</a></li>
        <li class="github"><i class="fa fa-github"></i><a href="{{'https://'.$github}}" target="_blank">{{$github}}</a></li>
        <li class="twitter"><i class="fa fa-twitter"></i><a href="{{'https://twitter.com/'.$twitter}}" target="_blank">{{'@'.$twitter}}</a></li>
        <li class="youtube"><i class="fa fa-youtube"></i><a href="{{'https://www.youtube.com/'.$youtube}}" target="_blank">{{$youtube}} (+300K Views)</a></li>
    </ul>
</div>
<div class="education-container container-block">
    <h2 class="container-block-title"><i class="fa fa-graduation-cap"></i> Education</h2>
    @foreach($education as $e)
        <div class="item">
            <h4 class="degree">{{$e['title']}}</h4>
            <h5 class="meta">{{$e['university']}}</h5>
            <div class="time">{{$e['period']}}</div>
        </div>
    @endforeach
</div>
<div class="languages-container container-block">
    <h2 class="container-block-title"><i class="fa fa-language"></i> Languages</h2>
    <ul class="list-unstyled interests-list">
        @foreach($languages as $language)
            <li>{{$language['name']}} <span class="lang-desc">({{$language['n/p']}})</span></li>
        @endforeach
    </ul>
</div>
<div class="interests-container container-block">
    <h2 class="container-block-title"><i class="fa fa-music"></i> Interests</h2>
    <ul class="list-unstyled interests-list">
    @foreach($interests as $interest)
        <li>{{$interest}}</li>
    @endforeach
    </ul>
</div>


