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

Route::get('/', 'HomeController@dashboard')
->name('dashboard');

Route::get('/registry/create', 'RegistryController@create')
->name('registry.create');

Route::post('/registry/', 'RegistryController@store')
->name('registry.store');

Route::get('/registry/{registry_id}/edit', 'RegistryController@edit')
->name('registry.edit');

Route::get('/registry/{registry_id}/permalink-{permalink}', 'RegistryController@permalink')
->name('registry.permalink');

Route::get('/registry/{registry_id}/terms/create', 'TermController@create')
->name('registry.terms.create');

Route::post('/registry/{registry_id}/terms/', 'TermController@store')
->name('registry.terms.store');

Route::get('/registry/{registry_id}/terms/{term_id}', 'TermController@edit')
->name('registry.terms.edit');

Route::post('/registry/{registry_id}/terms/{term_id}', 'TermController@update')
->name('registry.terms.update');
