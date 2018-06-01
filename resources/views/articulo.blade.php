@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <h4 class="">Serie: {{ $post->subtitle }}</h4>
            <p class="blog-post-meta">{{ $post->created_at->format('d \d\e F \d\e Y') }}</p>
            <p>{!! $post->content !!}</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3">
              <h4 class="font-italic">Artículos de la misma serie</h4>
              <ul class=" mb-0">
                  @foreach($sidebar as $link)
                  <li><a href="{{ route('articulo', $link->slug) }}">{{ str_replace('Serie ', '', $link->title) }}</a></li>
                  @endforeach
  
              </ul>
            </div>
          </aside><!-- /.blog-sidebar -->
      </div>
    </div>
  </article>

@endsection