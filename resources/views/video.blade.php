@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $item->title }}</h2>
            <p>{!! $item->content !!}</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3">
            <h4 class="font-italic">Conferencias y Seminarios</h4>
            <ol class="list-unstyled mb-0">
                @foreach($sidebar as $link)
                <li><a href="{{ route('audio', $link->slug) }}">{{ str_replace('Serie ', '', $link->title) }}</a></li>
                @endforeach

            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
      </div>
    </div>
  </article>

@endsection