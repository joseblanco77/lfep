<?php

if (!function_exists('getPaginasnestedTreeList') ) {
    /**
     * Devuelve todas las imágenes de la carpeta public/storage/{$namespace}
     *
     * @param  String $namespace
     * @return Array Urls
     */
    function getPaginasnestedTreeList()
    {
        $list = [];
        $tree = \Modules\Paginas\Entities\CajaverdePaginas::get()->toTree();

        $traverse = function ($categories, $prefix = '') use (&$traverse, &$list) {
            foreach ($categories as $category) {
                $list[$category->id] = $prefix.' '.$category->nombre;
        
                $traverse($category->children, $prefix.' → ');
            }
        };
        
        $traverse($tree);

        return $list;
    }
}