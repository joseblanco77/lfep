<?php
// Rutas para backend (requeire autenticación)
Route::group(['middleware' => ['web', 'auth:cajaverde'], 'prefix' => 'admin', 'namespace' => 'Modules\Contacto\Http\Controllers'], function()
{

    Route::middleware(['role:admin_contact_forms|editor_contact_forms'])->group(function()
    {
        Route::get('contacto/formularios', 'Crud\FormularioController@index')->name('cajaverde.contacto.formularios.index');
        Route::get('contacto/formularios/{mensaje}', 'Crud\FormularioController@show')->name('cajaverde.contacto.formularios.show');
    });

    Route::middleware(['role:admin_contact_forms|editor_contact_forms|checker_contact_forms'])->group(function()
    {
        Route::get('contacto/mensajes', 'Mensaje\MensajeController@index')->name('cajaverde.contacto.mensajes.index');
        Route::get('contacto/mensajes/{mensaje}', 'Mensaje\MensajeController@show')->name('cajaverde.contacto.mensajes.show');
    });    

});

// Rutas para frontend (sin autenticar)
Route::group(['middleware' => 'web', 'prefix' => 'contacto', 'namespace' => 'Modules\Contacto\Http\Controllers\Form'], function()
{
    Route::get('enviado', function() {
        return view('contacto::contacto.sent');
    })->name('cajaverde.contacto.enviado');
    
    Route::post('/', 'ContactoController@store');
    Route::get('/{slug?}',  'ContactoController@show')->name('cajaverde.contacto');
});
