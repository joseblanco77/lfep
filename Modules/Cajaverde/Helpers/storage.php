<?php

if (!function_exists('getStoredImagesByNamespace') ) {
    /**
     * Devuelve todas las imágenes de la carpeta public/storage/{$namespace}
     *
     * @param  String $namespace
     * @return Array Urls
     */
    function getStoredImagesByNamespace($namespace = 'img')
    {
        $images = [];
        $files = Storage::files("public/{$namespace}");

        foreach ($files as $file) {
            $visibility = Storage::getVisibility($file);
            
            if ($visibility === 'public') {
                $path = str_replace('public', 'storage', $file);
                $images[] = asset($path);
            }
        }
        
        return $images;
    }
}