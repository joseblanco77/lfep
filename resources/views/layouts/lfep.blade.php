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
          <a href="#"><img src="{{ asset('lfep/imgs/logo.jpg') }}" alt=""></a>
        </div>
        <nav class="col12 col-md-9 navbar navbar-expand-lg">
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos?</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Biografía del fundador</a>
                  <a class="dropdown-item" href="#">Principios Doctrinales</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cápsula Radial</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">¿Por qué un programa para la familia?</a>
                  <a class="dropdown-item" href="#">¿Por qué un micro programa o cápsula radial?</a>
                  <a class="dropdown-item" href="#">¿Por qué se necesita producir La Familia es Prioridad?</a>
                  <a class="dropdown-item" href="#">¿Cómo puedo ser parte del proyecto?</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Conferencias y Seminarios</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Cenas de Parejas</a>
                  <a class="dropdown-item" href="#">Predicaciones sobre la familia</a>
                  <a class="dropdown-item" href="#">¿Cómo puedo tener un evento?</a>
                  <a class="dropdown-item" href="#">¿Cómo puedo ser parte del proyecto?</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Programas para Emisoras</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Solicitud de inscripción</a>
                  <a class="dropdown-item" href="#">Matrimonios</a>
                  <a class="dropdown-item" href="#">Vida Familiar</a>
                  <a class="dropdown-item" href="#">Paternidad Responsable</a>
                  <a class="dropdown-item" href="#">Desafíos de la Familia Contemporanea</a>
                  <a class="dropdown-item" href="#">Ellas y ellos, contrarios pero complementarios</a>
                  <a class="dropdown-item" href="#">La familia que administra bien sus finanzas</a>
                  <a class="dropdown-item" href="#">Proverbios antiguos para familias modernas</a>
                  <a class="dropdown-item" href="#">Errores que debemos evitar los padres</a>
                  <a class="dropdown-item" href="#">Errores que debemos evitar en el matrimonio</a>
                  <a class="dropdown-item" href="#">Etapas naturales de la vida familiar</a>
                  <a class="dropdown-item" href="#">Adicciones</a>
                  <a class="dropdown-item" href="#">Hábitos</a>
                  <a class="dropdown-item" href="#">Refranes aplicados a la vida familiar</a>
                  <a class="dropdown-item" href="#">Superando las crisis familiares</a>
                  <a class="dropdown-item" href="#">Sexualidad</a>
                  <a class="dropdown-item" href="#">Heridas</a>
                  <a class="dropdown-item" href="#">Cantares, un canto al amor conyugal</a>
                  <a class="dropdown-item" href="#">Cenas de Parejas</a>
                  <a class="dropdown-item" href="#">Predicaciones sobre la familia</a>
                  <a class="dropdown-item" href="#">¿Cómo puedo tener un evento?</a>
                  <a class="dropdown-item" href="#">¿Cómo puedo ser parte del proyecto?</a>
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
            <h1>¿Tienes preguntas?</h1>
            <h2>Puedes enviar tus preguntas a: info@lafamiliaesprioridad.com o llena nuestro <a href="#">fomulario de contacto</a></h2>
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