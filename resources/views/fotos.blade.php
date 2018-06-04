@extends(env('APP_TEMPLATE'))

@php

$caption = [
    '',
    'Butizando',
    'Víctor Súchite con otros Conferencistas y participantes de Coicom 2009 en Mar del Plata, Argentina',
    'Conferencia en Iglesia Nazaret, Guatemala',
    'Con Pablo y Linda Finkenbinder',
    'Predicando en Córdoba, España',
    'Exponiendo una charla sobre la familia, en Santa Clara, Cuba',
    'Disertando una Conferencia de Matrimonios en Lawrence, Massachusetts, Estados Unidos',
    'Con Norman Parish y Mynor Vargas',
    'Con David Hormachea',
    'Con Andres Panasiuk y Moises Flores',
    'Impartiendo una Conferencia en Coicom 2005 en Santa Cruz, de la Sierra, Bolivia',
    'Con Alberto y Nohemí Mottesi',
    'Con Walter Heindenreich, Josue Lopez, Mario Vega y Malin',
    'Los esposos Víctor y Mayra Súchite',
    'Con el Dr. Samuel Berberián',
    'Predicando en Nazaret Oriente, iglesia de la cual el Lic. Víctor Súchite es Pastor en la zona 10 de ciudad Guatemala.',
    'Predicando en Iglesia Sendas de Vida en Brownsville, Texas. Actividad organizada por Radio Manantial 88.3 FM',
    'Con el personal y voluntarios de Radio Manantial 88.3 FM en Brownsville, Texas. Así como con la cantante Nidia Quintanilla',
    'Seminario impartido a matrimonios en las instalaciones de Radio Manantial 88.3 FM en Brownsville, Texas.',
    'Parte del grupo de parejas que asistieron al Seminario «Ellas y ellos, contrarios pero complementarios» en las instalaciones de Radio Manantial 88.3 FM en Brownsville, Texas.',
    'Con el legendario Dr. C. Peter Wagner, ícono del Seminario Teológico Fuller.',
    'Víctor y Mayra Súchite con los Pastores Luis Fernando Solares y Fernando Solares hijo.',
    'Haciendo lo que me apasiona: Predicar, impartir conferencias, enseñar la Palabra de Dios.',
    'Predicando en la Primera Iglesia de Dios en Providence, Rhode Island, Estados Unidos.',
    'Entrevista en el programa radial “Enfoque a la familia',
    'Lic. Víctor Súchite con el destacado Teólogo Dr. Emilio Antonio Nuñez.',
    'Víctor Súchite disertando una Conferencia Familiar en la Capilla Mayor del Seminario Teológico Centroamericano en Guatemala, para la presentación de su libro “La familia es prioridad”.',
    'Familia Súchite García.',
    'El Pastor Víctor Súchite, oficiando la boda número 100 en su carrera ministerial.',
    'Dos consejeros familiares: Ernesto Pinto recibiendo una copia del libro “La familia es prioridad.” de Víctor Súchite',
    'Lic. Víctor Súchite orando por los índigenas paraguayos, en Coicom 2011 que se llevó a cabo en Asunción, Paraguay.',
    'Los Siervos de Dios, también toman vacaciones... Un escocés y un chapín.',
    'Víctor Súchite a lápiz',
    'Con el Cantante Roberto Orellana',
    'Con el Orador y Escritor Lucas Leys',
    'Con la etnia Quiché en Nahalá, Sololá, Guatemala.',
]

@endphp


@section('content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">Galería de imágenes</h2>
        
                    <div class="row">


                        @for($i=1; $i<=34; $i++)
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img class="card-img-top" src="{{ asset('images/fotos/'.str_pad($i, 2, "0", STR_PAD_LEFT).'.jpg') }}" alt="Card image">
                                    <p class="card-text">{{ $caption[$i] }}</p>
                                </div>
                            </div>
                        </div>
                        @endfor
    
                    </div>

                </div>
            </div>


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