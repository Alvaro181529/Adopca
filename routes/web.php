<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login-google', function () {

    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
  $user = Socialite::driver('google')->stateless()->user();
dd($user);
  // $user->token
});

// Route::get('/', function () {

//     return view('welcome');
// });
Auth::routes();
Route::resource('/', \App\Http\Controllers\WelcomeController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'ScrollController@index');
Route::get('/home/paginacion', 'ScrollController@paginacion');
Route::get('/home/buscador', 'ScrollController@buscador');
Route::resource('categorias', \App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('clasificados', \App\Http\Controllers\ClasificadoController::class)->middleware('auth');
Route::resource('conversaciones', \App\Http\Controllers\ConversacioneController::class)->middleware('auth');
Route::resource('mensajes', \App\Http\Controllers\MensajeController::class)->middleware('auth');
Route::resource('perfiles', \App\Http\Controllers\PerfileController::class)->middleware('auth');
Route::resource('perfil', \App\Http\Controllers\PerfController::class)->middleware('auth');
Route::resource('posteados', \App\Http\Controllers\PosteadoController::class)->middleware('auth');
Route::resource('productos', \App\Http\Controllers\ProductoController::class);
Route::resource('servicios', \App\Http\Controllers\ServicioController::class)->middleware('auth');
Route::resource('servicioperfiles', \App\Http\Controllers\ServicioperfileController::class)->middleware('auth');
Route::resource('tipos', \App\Http\Controllers\TipoController::class)->middleware('auth');
Route::resource('clasificados', \App\Http\Controllers\ClasificadoController::class)->middleware('auth');
Route::resource('publicaciones', \App\Http\Controllers\PublicacioneController::class);
Route::resource('perdidos', \App\Http\Controllers\PerdidoController::class);
Route::resource('tuspaginas', \App\Http\Controllers\TuspaginaController::class)->middleware('auth');
Route::resource('mascotas', \App\Http\Controllers\MascotaController::class)->middleware('auth');
