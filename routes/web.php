<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('homepage');
