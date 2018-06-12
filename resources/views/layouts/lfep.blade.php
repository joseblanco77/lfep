@php
$audios       = itemsPortada('audio');
$somos        = itemsPortada('somos');
$capsula      = itemsPortada('capsula');
$conferencias = itemsPortada('conferencias');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>La Familia Es Prioridad</title>
  <link rel="stylesheet" href="{{ asset('lfep/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lfep/style.css') }}">
  @yield('headlinks')
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 logo">
          <a href="{{ route('home') }}"><img src="{{ asset('lfep/imgs/logo.jpg') }}" alt=""></a>
        </div>
        <nav class="col12 col-md-9 navbar navbar-expand-lg">
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="background-image:url(/lfep/imgs/menu.png)"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="nav navbar-nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" role="button">Inicio</a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos?</a>
                <div class="dropdown-menu">
                        @foreach($somos as $item)
                        <a class="dropdown-item" href="{{ route('somos', $item->slug) }}">{{ $item->title }}</a>
                        @endforeach
                </div>
              </li>
              {{--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cápsula Radial</a>
                <div class="dropdown-menu">
                        @foreach($capsula as $item)
                        <a class="dropdown-item" href="{{ route('capsula', $item->slug) }}">{{ $item->title }}</a>
                        @endforeach
                </div>
              </li>
              --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Conferencias y Seminarios</a>
                <div class="dropdown-menu">
                    @foreach($conferencias as $item)
                    <a class="dropdown-item" href="{{ route('conferencias', $item->slug) }}">{{ $item->title }}</a>
                    @endforeach
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Programas para Emisoras</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Solicitud de inscripción</a>
                  @foreach($audios as $item)
                  <a class="dropdown-item" href="{{ route('audio', $item->slug) }}">{{ $item->title }}</a>
                  @endforeach
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <main role="main">
      @include('pagelets.slide')
    @yield('content')
    <section id="askAnything">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>¿Tienes preguntas o un evento de parejas o familiar?</h1>
            <h2>Puedes enviar tus consultas o invitaciones a conferencias familiares a: <a href="mailto:programa&#x40;lafamiliaesprioridad.com">programa&#x40;lafamiliaesprioridad.com</a>, llena nuestro <a href="{{ route('cajaverde.contacto') }}">fomulario de contacto</a> o <a href="https://www.facebook.com/victor.suchite" target="_blank">encuentranos en Facebook</a></h2>
          </div>
        </div>
      </div>
    </section>
  </main><!-- /.container -->
  <footer class="blog-footer">
    <p>Recuerde: Después de su relación con Dios, la familia es prioridad.</p>
    <p>
      <a href="#">Hecho por: MakingDaWeb.com</a>
    </p>
  </footer>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('lfep/jquery-3.3.1.slim.min.js') }}"></script>
  <script src="{{ asset('lfep/popper.min.js') }}"></script>
  <script src="{{ asset('lfep/bootstrap.min.js') }}"></script>
  @yield('footscripts')
</body>
</html>
