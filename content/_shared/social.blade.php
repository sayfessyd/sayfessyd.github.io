<ul class="c-{{ $mode }}__social-buttons c-social-buttons">
    <li class="a-{{ $mode }}">
        <a target="_blank" class="c-social-button t-social-button t-social-button-active">
            <i class="fa-icon fa-lg far fa-lightbulb"></i>
        </a>
    </li>
    @foreach($profiles as $profile)
        <li class="a-{{ $mode }}">
            <a href="{{ $profile['url'] }}" target="_blank" class="c-social-button t-social-button">
                <i class="fa-icon fa-lg {{ $profile['icon'] }}"></i>
            </a>
        </li>
    @endforeach
</ul><!-- /c-{{ $mode }}__social-buttons -->
