<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('articulos',        'PostController@index')->name('articulos');
Route::get('articulos/{slug}', 'PostController@show')->name('articulo');

Route::get('preguntas',        'QuestionController@index')->name('preguntas');
Route::get('preguntas/{slug}', 'QuestionController@show')->name('pregunta');

Route::get('audio/{slug}',        'ContentController@audio')->name('audio');
Route::get('capsula/{slug}',      'ContentController@capsula')->name('capsula');
Route::get('somos/{slug}',        'ContentController@somos')->name('somos');
Route::get('conferencias/{slug}', 'ContentController@conferencias')->name('conferencias');
Route::get('video',               'ContentController@video')->name('video');
Route::get('fotos',               'ContentController@fotos')->name('fotos');
Route::get('orientador',          'ContentController@orientador')->name('orientador');

/*
|--------------------------------------------------------------------------
| Cajaverde Auth Routes
|--------------------------------------------------------------------------
|
| Si no hay autenticación, las rutas protegidas por el middleware "auth",
| se redireccionan automáticamente en el método unauthenticated() de
| app/Exceptions/Handler.php y se configuran en el indice 'default_login'
| de config/auth.php, que a su vez puede ser sobreescrito en el archivo .env
| con la clave AUTH_LOGIN
|
| Si el usuario completó una autenticación exitosamente, las rutas protegidas
| por el middleware "auth", se redireccionan automáticamente en el método
| handle() de app/Http/Middleware/RedirectIfAuthenticated.php y se configuran
| en el indice 'default_redirect' de config/auth.php, que a su vez puede ser
| sobreescrito en el archivo .env con la clave AUTH_REDIRECT
|
*/

