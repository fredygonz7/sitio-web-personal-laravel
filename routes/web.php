<?php

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

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');