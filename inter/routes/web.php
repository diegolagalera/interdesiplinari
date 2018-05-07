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

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/admin', function () {
    return view('layouts.layout');
});
Route::get('/registrar', function(){
    return view('auth.register');
})->name('registrar');
Route::get('/register/verify/{code}','UserController@verify');

Route::post('/registrar','UserController@registre');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UserController');

Route::resource('roles', 'RoleController');
Route::get('/mapa', 'HomeController@mapa');

Route::resource('permissions', 'PermissionController');

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/productos','ProductesController');
Route::resource('/ofertas','ofertescontroller');
Route::get('/{id}', 'HomeController@show');
