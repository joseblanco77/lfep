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


if (!function_exists('contactoCrudCampo') ) {
    /**
     * Muestra el formulario de contacto correspondiente
     *
     * @param  String $slug    URi del formulario
     * @return String
     */
    function contactoCrudCampo($tipo, $formulario_id)
    {
        return view('contacto::crud.campo')->with(compact('tipo', 'formulario_id'));
    }
}
