@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Listado de preguntas</h2>
            
            <table id="preguntas">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <a href="{{ route('pregunta', $post->slug) }}" title="{{ $post->title }}">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td>{{ $post->created_at->format('d \d\e F \d\e Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
      </div>
    </div>
  </article>

@endsection

@section('headlinks')
<link rel="stylesheet" href="{{ asset('lfep/jquery.dataTables.min.css') }}">
@endsection

@section('footscripts')
<script src="{{ asset('lfep/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#preguntas').DataTable({
            "order": []
        });
    });
</script>
@endsection