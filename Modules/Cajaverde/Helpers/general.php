<?php

if (!function_exists('printIfRouteIs') ) {
    /**
     * Revisa si la ruta corresponde con la URi actual
     * Entonces imprime una cadena
     * 
     * http://laraveldaily.com/how-to-check-current-url-or-route/
     *
     * @param  String $route   Nombre de la ruta a verificar
     * @param  String $text    Cadena a imprimir si la ruta coincide
     * @param  String $default Respuesta si la ruta no coincide
     * @return String
     */
    function printIfRouteIs($route, $text = ' class="active"', $default = '')
    {
        if (Route::current()->getName() === $route) {
            return $text;
        }

        return $default;
    }
}


if (!function_exists('printIfRequestIs') ) {
    /**
     * Revisa si el request corresponde con la URi actual
     * Entonces imprime una cadena
     * 
     * http://laraveldaily.com/how-to-check-current-url-or-route/
     *
     * @param  String $route   URi de el request a verificar
     * @param  String $text    Cadena a imprimir si el request coincide
     * @param  String $default Respuesta si el request no coincide
     * @return String
     */
    function printIfRequestIs($route, $text = ' class="active"', $default = '')
    {
        if (Request::is($route)) {
            return $text;
        }

        return $default;
    }
}

if (!function_exists('printIfRequestIn') ) {
    /**
     * Revisa si el request corresponde con la URi actual
     * Entonces imprime una cadena
     * 
     * http://laraveldaily.com/how-to-check-current-url-or-route/
     *
     * @param  String $route   URi de el request a verificar
     * @param  String $text    Cadena a imprimir si el request coincide
     * @param  String $default Respuesta si el request no coincide
     * @return String
     */
    function printIfRequestIn(Array $routes, $text = ' class="active open"', $default = '')
    {
        foreach ($routes as $route) {
            if (Request::is($route)) {
                return $text;
            }
        }

        return $default;
    }
}

if (!function_exists('setMetaTags') ) {
    /**
     * Recibe un arreglo y lo inyecta en la vista de metas para el template
     *
     * @param Array $tags
     * @return \Illuminate\View\View
     */
    function setMetaTags(Array $tags) 
    {
        return view('cajaverde::layouts.meta')->with(compact('tags'));
    }
}

if (!function_exists('showMetasForm') ) {
    /**
     * Recibe un arreglo e inyecta en un formulario para administrar meta tags
     *
     * @param Array $tags
     * @return \Illuminate\View\View
     */
    function showMetasForm(Array $tags) 
    {
        return view('cajaverde::utilities.metas')->with(compact('tags'));
    }
}