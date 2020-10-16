<p>
    <b>{{ $title }}</b>
    @if(!empty($subtitle))
        / <small>{{ $subtitle }}</small>
    @endif
    <br/>
    {{ $slot }}
</p>
