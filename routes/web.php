<?php

use Illuminate\Support\Facades\Route;

Route::auth([
    'register' => false,
    'reset' => true,
    'verify' => false,
]);

Route::feeds();

Route::get('/', 'BrowseController@index')->name('home');
Route::get('/tag/{tag}', 'BrowseController@tag')->name('tag');

Route::get('lien/ajouter', 'LinkController@create')->name('link.create');
Route::get('lien/{link}', 'BrowseController@link')->name('link.view');
Route::get('lien/modifier/{id}', 'LinkController@edit')->name('link.edit');
Route::get('lien/rafraichir/{id}/{hash}', 'LinkController@refresh')->name('link.refresh');
Route::get('lien/supprimer/{id}/{hash}', 'LinkController@delete')->name('link.delete');

Route::get('importer', 'ImportController@form')->name('import');
Route::post('importer', 'ImportController@store');