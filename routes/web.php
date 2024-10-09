<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('frontend.homepage');
Route::get('/about', 'App\Http\Controllers\Frontend\FrontendController@about')->name('frontend.about');
Route::get('/contact', 'App\Http\Controllers\Frontend\FrontendController@contact')->name('frontend.contact');
Route::get('/team', 'App\Http\Controllers\Frontend\FrontendController@team')->name('frontend.team');