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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}','PagesController@update')->name('notas.update');

Route::delete('eliminar/{id}','PagesController@eliminar')->name('notas.eliminar');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('notas');

Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');

Route::post('/valor','PagesController@valor')->name('datos.crear');

Route::get('/cuenta_agua', 'PagesController@cuenta_agua')->name('cuenta_agua');

Route::get('/cuenta_elec', 'PagesController@cuenta_elec')->name('cuenta_elec');

Route::post('/formulario_cuentas','PagesController@form_cuenta_agua')->name('cuentas.crear');

Route::post('/formulario_cuentas_elec','PagesController@form_cuenta_elec')->name('cuentas.crear_elec');

Route::get('/lista_agua', 'PagesController@lista_agua')->name('lista_agua');

Route::get('/lista_elec', 'PagesController@lista_elec')->name('lista_elec');


