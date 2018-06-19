@extends(config('cajaverde.admin_layout'))

@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> Mensajes de contacto </h3>
                        <p class="title-description"> Listado histórico de mensajes de contacto </p>
                    </div>
                    <section class="example">
                        <div class="table-flip-scroll">
                            <table id="mensajes-historico" class="table table-striped table-bordered table-hover flip-content">
                                <thead class="flip-header">
                                    <tr>
                                        <th class="text-right">ID</th>
                                        <th class="text-right">Fecha</th>
                                        <th>Origen</th>
                                        <th>Muestra</th>
                                        <th class="text-right">IP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mensajes as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->id }}</td>
                                        <td>
                                            <a href="{{ route('cajaverde.contacto.mensajes.show', $mensaje->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                                {{ $mensaje->created_at }}
                                            </a>
                                        </td>
                                        <td>{{ ($mensaje['payload']['encabezado']['titulo'] ) }}</td>
                                        <td class="small">
                                            <small>
                                            @foreach($mensaje['payload']['campos'] as $nombre => $campo)
                                            <strong>{{$nombre}}:</strong> {{ str_limit($campo, 40, '…') }}@if($loop->remaining), - @endif
                                            @endforeach
                                            </small>
                                        </td>
                                        <td>{{ $mensaje->ip }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@stop




@section('headlinks')
<link rel="stylesheet" href="{{ asset('admin/vendor/DataTables/datatables.min.css') }}">
@stop




@section('footscripts')
<script src="{{ asset('admin/vendor/DataTables/datatables.min.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#mensajes-historico').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                { "extend": 'copy', "text":'Copy <i class="fa fa-copy"></i>',"className": 'btn btn-info' },
                { "extend": 'excel', "text":'Excel <i class="fa fa-file-excel-o"></i>',"className": 'btn btn-success' },
                { "extend": 'pdf', "text":'PDF <i class="fa fa-file-pdf-o"></i>',"className": 'btn btn-danger' }
            ]
        } );
    });
</script>
@stop
