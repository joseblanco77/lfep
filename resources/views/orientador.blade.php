@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">El orientador familair</h2>
            
            <p>El Escritor y Consejero Familiar Víctor Súchite, obtuvo su Profesorado en Biblia en el Seminario Teológico Centroamericano SETECA de Guatemala y su Licenciatura en Estudios Bíblicos y Teológicos, en la Facultad Latinoamericana de Estudios Teológicos FLET, con sede en Miami, Florida, EE.UU. En 2009 obtuvo su Maestría en Ministerio Cristiano con énfasis en Consejería en el SETECA. En 2012 alcanzó el título «Experto en Orientación Familiar» otorgado por el Instituto de Formación Familiar de España. Dios lo ha usado como Escritor de nueve libros, Comunicador Radial, Administrador, Conferencista, Pastor y Consejero Familiar. Es uno de los Facilitadores Certificados de Cultura Financiera en Guatemala. Actualmente es Pastor de Iglesia Nazaret Oriente en ciudad Guatemala. Ha viajado a EE.UU., México, Cuba, República Dominicana, El Salvador, Honduras, Costa Rica, Panamá, Ecuador, Perú, Bolivia, Argentina, España y su natal Guatemala por asuntos ministeriales. Es uno de los oradores de COICOM, Global Vision, Esperanza de Vida y otros eventos internacionales. Además es Asesor Internacional del Dr. Mynor Vargas, del Consorcio Internacional de Iglesias Shalom y del Seminario Teológico Crown de Nueva Inglaterra, Estados Unidos.</p>

            <p><img src="{{ asset('images/familia_suchite.jpg') }}"></p>

            <p>Víctor y su esposa Mayra llevan 27 años de casados y han procreado tres hijos: Tania Mabel, Kevin Emanuel y Yadira Zaidé. Servir juntos a Dios en el ministerio es una de las satisfacciones de esta familia pastoral, que en enero de 2010 iniciaron el Ministerio «La Familia es Prioridad», como un recurso de apoyo a los matrimonios y familias de nuestro continente.</p>

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