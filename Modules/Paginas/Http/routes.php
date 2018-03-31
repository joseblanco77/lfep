<?php

Route::group(['middleware' => ['web', 'auth:cajaverde'], 'prefix' => 'admin', 'namespace' => 'Modules\Paginas\Http\Controllers'], function()
{
    Route::middleware(['role:editor_paginas|admin_paginas'])->group(function()
    {
        Route::get('paginas',                 'PaginasController@index')  ->name('cajaverde.paginas.index');
        Route::post('paginas',                'PaginasController@store')  ->name('cajaverde.paginas.store');
        Route::get('paginas/crear',           'PaginasController@create') ->name('cajaverde.paginas.create');
        Route::get('paginas/{pagina}',        'PaginasController@show')   ->name('cajaverde.paginas.show');
        Route::patch('paginas/{pagina}',      'PaginasController@update') ->name('cajaverde.paginas.update');
        Route::get('paginas/{pagina}/editar', 'PaginasController@edit')   ->name('cajaverde.paginas.edit');

        Route::post('paginas/upload',         'UploadController@store')   ->name('cajaverde.paginas.upload');
    });

    Route::middleware(['role:admin_paginas'])->group(function()
    {
        Route::delete('paginas/{pagina}', 'PaginasController@destroy')->name('cajaverde.paginas.destroy');
    });

});

Route::group(['middleware' => ['web']], function() {
    Route::get('{slug}', 'Modules\Paginas\Http\Controllers\DisplayController@show')->name('cajaverde.paginas.display');
});