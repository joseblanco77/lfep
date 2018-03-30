<?php

namespace Modules\Cajaverde\Utilities;

use Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageUploader
{
    public $extension;

    public $filename;

    public $image;
    
    public $namespace = 'img';

    public $path;
    
    public $response;

    public function __construct() 
    {
        $this->response = new \stdClass();
        $this->response->message = false;
    }

    /**
     * Carga la imagen desde el request
     * 
     * @return self
     */
    public function uploadFromRequest(Request $request, $name = 'image')
    {
        $this->image = Image::make($request->$name);
        
        return $this;
    }

    /**
     * Establece el namespace para almacenar la imagen
     * 
     * @return self
     */
    public function setNamespace($namespace) 
    {
        $this->namespace = $namespace; 
        
        return $this;
    }

    /**
     * Establece la extensión original del archivo
     * 
     * @return self
     */
    public function setExtension(Request $request, $name = 'image') 
    {
        $file = $request->file($name);
        if($file)
        {
            $this->extension =  $file->clientExtension();
        }

        return $this;
    }

    /**
     * Establece el nombre con el que se guardará el archivo
     * 
     * @return self
     */
    public function setFilenameFromTime()
    {
        $this->filename = str_slug(microtime());
        
        return $this;
    }

    /** 
     * Establece la donde se guardará el archivo
     * 
     * @return self
     */
    public function setImagePath()
    {
        $this->path = "public/{$this->namespace}/{$this->filename}.{$this->extension}";
        
        return $this;
    }

    /** 
     * Guarda la imagen y establece su visibilidad como pública
     * 
     * @return self
     */
    public function storagePublic()
    {
        Storage::put($this->path, (string) $this->image->encode());

        Storage::setVisibility($this->path, 'public');

        return $this;
    }

    /** 
     * Crea una respuesta con la URL de la imagen
     * 
     * @return self
     */
    public function setOkResponse()
    {
        $this->response->message = 'ok';
        $this->response->image = asset(Storage::url($this->path));

        return $this;
    }



}