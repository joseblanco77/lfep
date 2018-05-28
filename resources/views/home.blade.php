@extends(env('APP_TEMPLATE'))

@section('content')

      <section id="blogCards" class="container">
        <div class="row">
          <h1 class="col-12">Artículos</h1>
          @foreach(postsPortada() as $post)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('lfep/imgs/art'.$loop->iteration.'.jpg') }}">
              <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('articulo', $post->slug) }}">{{ $post->title }}</a></h5>
                <p class="card-text">{!! str_limit($post->content, 200) !!}</p>
                <div class="d-flex justify-content-end align-items-center">
                  <div class="btn-group">
                    <a href="{{ route('articulo', $post->slug) }}" class="btn btn-sm btn-outline-secondary">Leer más…</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-md-12 text-right">
            <a href="{{ route('articulos') }}">Leer todos</a>
          </div>
        </div>
        <div class="row">
          <h1 class="col-12">Pregunta Del Mes</h1>
          <div class="col-md-6">
            @php $question = questionPortada(); @endphp
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <h3 class="answerTitle">
                  <a class="text-dark" href="#">Abril</a>
                </h3>
                <p class="card-text mb-auto"><strong>{{ $question->title }}</strong><br>{!! str_limit($question->answer, 130) !!}</p>
                <a href="#" class="answerLink">Leer la respuesta</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: auto; height: 250px;" src="{{ asset('lfep/imgs/consejero.jpg') }}" data-holder-rendered="true">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <h3 class="answerTitle">
                  <a class="text-dark" href="#">Mayo</a>
                </h3>
                <p class="card-text mb-auto">Pastor Víctor Súchite, quisiera saber: ¿Por qué mi hijo se comporta mal? ¿Por qué manifiesta siempre una conducta negativa o algún trastorno de conducta?</p>
                <a href="#" class="answerLink">Leer la respuesta</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: auto; height: 250px;" src="{{ asset('lfep/imgs/consejero.jpg') }}" data-holder-rendered="true">
            </div>
          </div>
        </div>
      </section>

@endsection