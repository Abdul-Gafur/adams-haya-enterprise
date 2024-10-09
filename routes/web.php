<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('homepage');
Route::get('/about', 'App\Http\Controllers\Frontend\FrontendController@about')->name('frontend.about');
Route::get('/contact', 'App\Http\Controllers\Frontend\FrontendController@contact')->name('frontend.contact');