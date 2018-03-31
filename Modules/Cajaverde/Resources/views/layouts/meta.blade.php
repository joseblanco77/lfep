@if(isset($tags['title']))
<title>{{ config('app.name', 'Laravel') }} - {{ $tags['title'] }}</title>
@else
<title>{{ config('app.name', 'Laravel') }}</title>
@endif

@if(isset($tags['meta_description']))
<meta name="description" content="{{ $tags['meta_description'] }}">
@endif

@if(isset($tags['meta_author']))
<meta name="author" content="{{ $tags['meta_author'] }}">
@endif

@if(isset($tags['og_url']))
<meta property="og:url"         content="{{ $tags['og_url'] }}">
@endif

@if(isset($tags['og_type']))
<meta property="og:type"        content="{{ $tags['og_type'] }}">
@endif

@if(isset($tags['og_title']))
<meta property="og:title"       content="{{ $tags['og_title'] }}">
@endif

@if(isset($tags['og_description']))
<meta property="og:description" content="{{ $tags['og_description'] }}">
@endif

@if(isset($tags['og_image']))
<meta property="og:image"       content="{{ $tags['og_image'] }}">
@endif