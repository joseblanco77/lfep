@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container audiosContainer">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $item->title }}</h2>
            <p>{!! $item->content !!}</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3">
            <h4 class="font-italic">Otras series</h4>
            <ul class=" mb-0">
                @foreach($sidebar as $link)
                <li><a href="{{ route('audio', $link->slug) }}">{{ str_replace('Serie ', '', $link->title) }}</a></li>
                @endforeach

            </ul>
          </div>
        </aside><!-- /.blog-sidebar -->
      </div>
    </div>
  </article>

@endsection

@section('headlinks')
<style>
  .audiosContainer h3 {
    font-size: 1rem;
  }
</style>
@endsection