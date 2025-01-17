<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     $nombre = "Fredy";
//     return view('home', compact('nombre'));
// })->name('home');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// // muestra la lista de proyectos
// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// // muestra el formulario para crear proyecto
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');
// // muestra el formulario para editar proyecto
// Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// // envia los datos del formulario para crear proyecto
// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// // muestra el formulario para actualizar proyecto
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// // muestra el formulario para actualizar proyecto
// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
// // muesta un proyecto
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

// utilizando route resource para simplificar las rutas
Route::resource('projects', 'ProjectController');
    //->middleware('auth'); // solo los usuarios autenticados pueden acceder a estas rutas

// cambiando los link como  estaban antes "portfolio"
// Route::resource('portfolio', 'ProjectController')
//     ->parameters(['portfolio' => 'project'])
//     ->names('projects');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Auth::routes(['register' => false]);
