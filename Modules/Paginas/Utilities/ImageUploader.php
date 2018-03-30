<?php

namespace Modules\Paginas\Utilities;

use Illuminate\Http\Request;
use Modules\Cajaverde\Utilities\ImageUploader as Uploader;

class ImageUploader extends Uploader
{

    /**
     * Carga imagenes para el módulo páginas
     * 
     * @TODO Extraer a su propia clase en su propio módulo
     * @return JSON
     */
    public function uploadPaginasImage(Request $request) 
    {
        try {
            $this->uploadFromRequest($request, 'file')
                ->setNamespace('paginas')
                ->setFilenameFromTime()
                ->setExtension($request, 'file')
                ->setImagePath()
                ->storagePublic()
                ->setOkResponse();
    
        } catch (\Exception $exception) {
            $this->response->message = $exception->getMessage();
            $this->response->errors = new \stdClass();
            $this->response->errors->file = [
                'No pudo cargarse la imagen.'
            ];
            $this->response->errors->data = [
                'path' => $this->path,
                'filename' => $this->filename,
                //'image' => $this->image,
                'namespace' => $this->namespace,
            ];
        }
        
        return response()->json($this->response);
    }
}