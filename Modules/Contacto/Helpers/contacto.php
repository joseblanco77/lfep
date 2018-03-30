<?php


if (!function_exists('contactoFormulario') ) {
    /**
     * Muestra el formulario de contacto correspondiente
     * 
     * @param  String $slug    URi del formulario
     * @return String
     */
    function contactoFormulario($slug)
    {
        $formulario = \Modules\Contacto\Entities\CajaverdeContactoFormularios::where('slug', $slug)->first();

        return view('contacto::contacto.form', compact('formulario'));
    }
}
