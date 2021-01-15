<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/{slug}', [
    'as' => 'page',
    'uses' => 'PageController@index'
]);