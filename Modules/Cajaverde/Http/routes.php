<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Cajaverde\Http\Controllers'], function()
{
    // Authentication Routes...
    Route::get('login',  'Auth\LoginController@showLoginForm')->name('cajaverde.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('cajaverde.logout');

    // Password Reset Routes...
    Route::get('password/reset',         'Auth\ForgotPasswordController@showLinkRequestForm')->name('cajaverde.password.request');
    Route::post('password/email',        'Auth\ForgotPasswordController@sendResetLinkEmail')->name('cajaverde.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('cajaverde.password.reset');
    Route::post('password/reset',        'Auth\ResetPasswordController@reset');

    Route::middleware(['auth:cajaverde'])->group(function()
    {
        Route::get('/', 'Dashboard\DashboardController@index')->name('cajaverde.dashboard');

        // Usuarios
        Route::get('usuarios/{usuario}',        'Usuarios\UsuariosController@show')->name('cajaverde.usuarios.show');
        Route::get('usuarios/{usuario}/editar', 'Usuarios\UsuariosController@edit')->name('cajaverde.usuarios.edit');
        Route::patch('usuarios/{usuario}',      'Usuarios\UsuariosController@update')->name('cajaverde.usuarios.update');
        Route::middleware(['role:editor_usuarios|admin_usuarios'])->group(function()
        {
            Route::get('usuarios',       'Usuarios\UsuariosController@index') ->name('cajaverde.usuarios.index');
            Route::post('usuarios',      'Usuarios\UsuariosController@store') ->name('cajaverde.usuarios.store');
            Route::get('usuarios/crear', 'Usuarios\UsuariosController@create')->name('cajaverde.usuarios.create');
        });
    
        Route::middleware([ 'role:admin_usuarios'])->group(function()
        {
            Route::delete('usuarios/{usuario}', 'Usuarios\UsuariosController@destroy')->name('cajaverde.usuarios.destroy');
        });
        
    
        // Roles
        Route::middleware(['role:editor_roles|admin_roles'])->group(function()
        {
            Route::patch('roles/{usuario}', 'Usuarios\RoleController@update') ->name('cajaverde.roles.update');
        });
        Route::middleware(['role:admin_roles'])->group(function()
        {
            Route::delete('roles/{usuario}', 'Usuarios\RoleController@destroy')->name('cajaverde.roles.destroy');
        });
    });

    


});

if(env('APP_DEBUG')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
