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

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/contactar', function () {
    return view('contactar');
})->name('contactar');
Route::post('/contactar','HomeController@contactar')->name('contactar');
Route::resource('/cistella', 'CistellaController');
Route::get('/cistella/cancel/{id}','CistellaController@cancel')->name('cistella.cancel');
Route::get('/cistella/finalitzar/{id}','CistellaController@finalitzar')->name('cistella.finalitzar');



Route::get('/registrar', function(){
    return view('auth.register');
})->name('registrar');
Route::get('/register/verify/{code}','UserController@verify');

Route::post('/registrar','UserController@registre');
Route::resource('/ofertas','ofertescontroller');


Auth::routes();

Route::resource('/users', 'UserController');

Route::resource('roles', 'RoleController');
Route::get('/mapa', 'HomeController@mapa');

Route::resource('permissions', 'PermissionController');

Route::resource('/productos','ProductesController');
Route::get('/{id}', 'HomeController@show');
