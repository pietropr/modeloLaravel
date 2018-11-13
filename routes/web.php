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

Route::get('/', function () {

    if(Auth::guest()) {

        return Redirect::route('login');
    }

    else {

        return view('painel.dashboard');
    }



})->name('index');


Route::get('/login', function () {
    return view('painel.login');
})->name('login');

Route::get('/logout', 'AuthController@logout')->name('logout');


Route::post('/logar', 'AuthController@logar')->name('logar');

Route::middleware('auth')->group(function () {

    Route::get('/categoria/novo', 'CategoriaController@create')->name('novaCategoria');
    Route::post('/categoria/store', 'CategoriaController@store')->name('guardaCategoria');
    Route::get('/categoria/{id}', 'CategoriaController@show')->name('mostraCategoria');

    Route::get('/autor/novo', 'AutorController@create')->name('novoAutor');
    Route::post('/autor/store', 'AutorController@store')->name('guardaAutor');


    Route::get('/post/novo', 'PostController@create')->name('novoPost');

});


