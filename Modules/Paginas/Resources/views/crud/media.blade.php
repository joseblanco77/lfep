<div class="modal" id="modal-media">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Librería de imágenes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <div class="modal-body modal-tab-container">
                <ul class="nav nav-tabs modal-tabs" role="tablist" id="mediaNav">
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab" id="gallerytab">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab" id="uploadtab">Cargar</a>
                    </li>
                </ul>
                <div class="tab-content modal-tab-content">
                    <div class="tab-pane" id="gallery" role="tabpanel">
                        <div class="images-container">
                            <div class="row">
                                @foreach(getStoredImagesByNamespace('paginas') as $image)
                                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="image-container">
                                        <div class="image" style="background-image:url('{{ $image }}')" data-path="{{ $image }}"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="upload" role="tabpanel">
                        <div class="upload-container">
                            <div id="dropzone">
                                <form action="{{ route('cajaverde.paginas.upload') }}" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="formuploadajax">
                                    {{ csrf_field() }}
                                    <div class="dz-message-block">
                                        <div class="dz-message needsclick"> 
                                            Arrastre las imágenes o haga clic para seleccionar. <br>
                                            <small>Sólo imágenes .jpg o .png no mayores de 10MB<small>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="insertimageoneditor">Insertar el archivo seleccionado</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->