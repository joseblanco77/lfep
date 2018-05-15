<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>La Familia Es Prioridad</title>
  <link rel="stylesheet" href="{{ asset('lfep/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lfep/style.css') }}">
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
    <section id="slide" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slide" data-slide-to="0" class="active"></li>
        <li data-target="#slide" data-slide-to="1"></li>
        <li data-target="#slide" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('lfep/imgs/slide/1') }}.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('lfep/imgs/slide/2') }}.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('lfep/imgs/slide/3') }}.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section id="blogCards" class="container">
      <div class="row">
        <h1 class="col-12">Artículos</h1>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('lfep/imgs/art1.jpg') }}">
            <div class="card-body">
              <h5 class="card-title"><a href="#">Niños Mentirosos</a></h5>
              <p class="card-text">Te va a crecer la nariz como a Pinocho si sigues diciendo mentiras. ¿Le ha dicho usted eso a su hijo...</p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leer más...</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('lfep/imgs/art3.jpg') }}">
            <div class="card-body">
              <h5 class="card-title"><a href="#">Dejar limpio y ordenado lo que se ensució o usó</a></h5>
              <p class="card-text">¿Conoce usted personas que tienen el mal hábito de dejar sucio el lugar o las cosas que usaron en una casa? Por ejemplo: Usan trastos...</p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leer más...</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('lfep/imgs/art2.jpg') }}">
            <div class="card-body">
              <h5 class="card-title"><a href="#">El Legado Educativo</a></h5>
              <p class="card-text">¿Qué es un legado? En simples palabras, un legado es algo que se deja o se transmite a otras personas. Puede tratarse de bienes...</p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leer más...</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-right">
          <a href="#">Leer todos</a>
        </div>
      </div>
      <div class="row">
        <h1 class="col-12">Pregunta Del Mes</h1>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="answerTitle">
                <a class="text-dark" href="#">Abril</a>
              </h3>
              <p class="card-text mb-auto">Pastor Víctor Súchite, quisiera saber: ¿Por qué mi hijo se comporta mal? ¿Por qué manifiesta siempre una conducta negativa o algún trastorno de conducta?</p>
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
</body>
</html>