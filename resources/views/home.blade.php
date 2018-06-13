@extends(env('APP_TEMPLATE'))

@php

$articulos = [
    '0' => 'lfep/imgs/edyn1.jpg',
    '1' => 'lfep/imgs/bikes.jpg',
    '2' => 'lfep/imgs/ninios.jpg',
];

@endphp


@section('content')

      <section id="blogCards" class="container">
        <div class="row">
          <h1 class="col-12">Artículos</h1>
          @foreach($posts as $post)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset($articulos[$loop->index]) }}">
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
          <div class="col-lg-6 col-md-12">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top img-fluid" src="{{ asset('lfep/imgs/pregunta.jpg') }}" data-holder-rendered="true">
              <div class="card-body">

                <h3 class="answerTitle">
                  <a class="text-dark" href="{{ route('pregunta', $question->slug) }}">Pregunta Del Mes</a>
                </h3>
                <p class="card-text mb-auto"><strong>{{ $question->title }}</strong><br>{!! str_limit($question->answer, 130) !!}</p>
                <a href="{{ route('pregunta', $question->slug) }}" class="answerLink">Leer la respuesta</a>
              </div>
              
              <div class="card-footer text-right">
                  <a href="{{ route('preguntas') }}">Leer todas las preguntas</a>
                </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top img-fluid"  src="{{ asset('lfep/imgs/consejero.jpg') }}" data-holder-rendered="true">
              <div class="card-body">
                <h3 class="answerTitle">
                  <a class="text-dark" href="{{ route('video') }}">Conferencias en video</a>
                </h3>
                <p class="card-text mb-auto">Extractos de las conferencias "Consejos para fortalecer su matrimonio" y "Excelencia en la Familia".</p>
                <a href="{{ route('video') }}" class="answerLink">Ver vídeos</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
                
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/fotos/09.jpg') }}" data-holder-rendered="true">
              <div class="card-body">
                <h3 class="answerTitle">
                  <a class="text-dark" href="{{ route('fotos') }}">Fotos</a>
                </h3>
                <p class="card-text mb-auto">Galería de imágenes del Pastor Víctor Súchite.</p>
                <a href="{{ route('fotos') }}" class="answerLink">Ver fotos</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('lfep/imgs/edyn2.jpg') }}" data-holder-rendered="true">
              <div class="card-body">
                <h3 class="answerTitle">
                  <a class="text-dark" href="{{ route('descargar', 'el-credo-del-matrimonio-y-la-familia.pdf') }}" target="_blank">PDF gratuito</a>
                </h3>
                <p class="card-text mb-auto">El credo del matrimonio y la familia.</p>
                <a href="{{ route('descargar', 'el-credo-del-matrimonio-y-la-familia.pdf') }}" target="_blank" class="answerLink">Descargar</a>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection