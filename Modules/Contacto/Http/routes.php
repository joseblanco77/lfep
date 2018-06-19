<?php
// Rutas para backend (requeire autenticación)
Route::group(['middleware' => ['web', 'auth:cajaverde'], 'prefix' => 'admin', 'namespace' => 'Modules\Contacto\Http\Controllers'], function()
{

    Route::middleware(['role:admin_contact_forms|editor_contact_forms'])->group(function()
    {
        // Campos
        Route::post( 'contacto/campo',         'Crud\CamposController@store') ->name('cajaverde.contacto.campo.store');
        Route::patch('contacto/campo/{campo}', 'Crud\CamposController@update')->name('cajaverde.contacto.campo.update');
        // Emails
        Route::post( 'contacto/email',         'Crud\EmailsController@store') ->name('cajaverde.contacto.email.store');
        Route::patch('contacto/email/{email}', 'Crud\EmailsController@update')->name('cajaverde.contacto.email.update');
        // Formularios
        Route::get(  'contacto/formularios',                     'Crud\FormularioController@index') ->name('cajaverde.contacto.formularios.index');
        Route::get(  'contacto/formularios/crear',               'Crud\FormularioController@create')->name('cajaverde.contacto.formularios.create');
        Route::post( 'contacto/formularios',                     'Crud\FormularioController@store') ->name('cajaverde.contacto.formularios.store');
        Route::get(  'contacto/formularios/{formulario}',        'Crud\FormularioController@show')  ->name('cajaverde.contacto.formularios.show');
        Route::get(  'contacto/formularios/{formulario}/editar', 'Crud\FormularioController@edit')  ->name('cajaverde.contacto.formularios.edit');
        Route::patch('contacto/formularios/{formulario}',        'Crud\FormularioController@update')->name('cajaverde.contacto.formularios.update');
    });
    Route::middleware(['role:admin_contact_forms'])->group(function()
    {
        Route::delete('contacto/campo/{campo}',            'Crud\CamposController@destroy')    ->name('cajaverde.contacto.campo.destroy');
        Route::delete('contacto/email/{email}',            'Crud\EmailsController@destroy')    ->name('cajaverde.contacto.email.destroy');
        Route::delete('contacto/formularios/{formulario}', 'Crud\FormularioController@destroy')->name('cajaverde.contacto.formularios.destroy');
    });

    Route::middleware(['role:admin_contact_forms|editor_contact_forms|checker_contact_forms'])->group(function()
    {
        Route::get('contacto/mensajes',           'Mensaje\MensajeController@index')->name('cajaverde.contacto.mensajes.index');
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
