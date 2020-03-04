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
    return view('welcome');
});

Route::namespace('Admin')->group(function () {
    Route::get('/admin', 'IndexController@index')->name('admin.index');
    Route::get('/admin/concept', 'ConceptController@index')->name('admin.concept.index');
    Route::post('/admin/concept/store', 'ConceptController@store')->name('admin.concept.store');
});
