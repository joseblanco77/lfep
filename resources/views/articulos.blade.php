@extends(env('APP_TEMPLATE'))

@section('content')

<article>
    <div class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Listado de artículos</h2>
            
            <table id="articulos">
                <thead>
                    <tr>
                        <th>Artículo</th>
                        <th>Serie</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <a href="{{ route('articulo', $post->slug) }}" title="{{ $post->title }}">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td>{{ $post->subtitle }}</td>
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
        $('#articulos').DataTable({
            "order": []
        });
    });
</script>
@endsection