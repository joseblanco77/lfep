<?php

namespace Modules\Paginas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Paginas\Utilities\ImageUploader;
use Modules\Paginas\Http\Requests\UploadRequest;

class UploadController extends Controller
{
    private $imageUploader;

    /**
     * Set the value of imageUploader
     */ 
    public function __construct(ImageUploader $imageUploader)
    {
        $this->imageUploader = $imageUploader;
    }
    
    public function store(UploadRequest $request)
    {
        return $this->imageUploader->uploadPaginasImage($request);
    }

}
