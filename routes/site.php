<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

 Auth::routes(['verify' =>true]);
    Route::group([
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware'=>['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

    ],function(){

    Route::group(['namespace' =>'Site'], function () {

        route::get('/','HomeController@home')->name('home');
        route::get('property/{id}','PropertyController@propertyById')->name('property.details');



     
    
    }); 
});

