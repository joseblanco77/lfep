<?php

Route::group(['middleware' => 'web', 'prefix' => 'articulos', 'namespace' => 'Modules\Articulos\Http\Controllers'], function()
{
    Route::get('/', 'ArticulosController@index');
});
