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

Route::get('/', 'WebController@inicio')->name('inicio');

Route::prefix('pokemon')->name('pokemon.')->group(function () {
     // localhost/pokemon/
     Route::get('/','PokemonController@todos')->name('todos');
     // localhost/pokemon/nuevo
     Route::get('/nuevo','PokemonController@nuevo')->name('nuevo');
     // localhost/pokemon/nuevo
     Route::post('/','PokemonController@guardar')->name('guardar');
     // localhost/pokemon/{id}
     Route::get('/{pokemon}','PokemonController@uno')->name('uno');
     // localhost/pokemon/{id}/editar
     Route::get('/{pokemon}/editar','PokemonController@editar')->name('editar');
     
     Route::put('/{pokemon}', 'PokemonController@actualizar')->name('actualizar');
     // localhost/pokemon/{id}
     Route::delete('/{pokemon}', 'PokemonController@borrar')->name('borrar');
});

Route::get('/type','TypeController@todos')->name('tipos');
Route::get('/type/{tipo}', 'TypeController@uno')->name('tipo');