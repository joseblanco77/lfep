<?php


if (!function_exists('getFechaLatina') ) {
    /**
     * Convierte una fecha a formato d-m-Y o el especificado
     *
     * @param  String $datetime
     * @return String
     */
    function getFechaLatina($datetime, $format = 'd-m-Y')
    {
        $fecha = Carbon\Carbon::parse($datetime);

        return $fecha->format($format);
    }
}   
