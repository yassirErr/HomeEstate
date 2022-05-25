<?php

use Illuminate\Support\Facades\Route;


Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){


  Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin','prefix'=>'admin'], function () { 

    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('logout','LoginController@logout')->name('admin.logout');

    Route::group(['prefix'=>'main_categories'],function(){ 
      Route::get('/','MainCategoriesController@index')->name('admin.categories');
      Route::get('create','MainCategoriesController@create')->name('admin.categories.create');
      Route::post('store','MainCategoriesController@store')->name('admin.categories.store');
      Route::get('edit/{id}','MainCategoriesController@edit')->name('admin.categories.edit');
      Route::post('update/{id}','MainCategoriesController@update')->name('admin.categories.update');
      Route::get('delete/{id}','MainCategoriesController@delete')->name('admin.categories.delete');
    });
 

    Route::group(['prefix'=>'cities'],function(){ 
      Route::get('/','CitiesController@index')->name('admin.cities');
      Route::get('create','CitiesController@create')->name('admin.cities.create');
      Route::post('store','CitiesController@store')->name('admin.cities.store');
      Route::get('edit/{id}','CitiesController@edit')->name('admin.cities.edit');
      Route::post('update/{id}','CitiesController@update')->name('admin.cities.update');
      Route::get('delete/{id}','CitiesController@delete')->name('admin.cities.delete');
    });


    
    Route::group(['prefix'=>'users'],function(){ 
      Route::get('/','UsersController@index')->name('admin.users');
      Route::get('create','UsersController@create')->name('admin.users.create');
      Route::post('store','UsersController@store')->name('admin.users.store');
      Route::get('delete/{id}','UsersController@delete')->name('admin.users.delete');
    });


    Route::group(['prefix'=>'properties'],function(){ 

      Route::get('/','propertiesController@index')->name('admin.properties');
      Route::get('create','propertiesController@create')->name('admin.properties.general.create');
      Route::post('store','propertiesController@store')->name('admin.properties.general.store');
      Route::get('edit/{id}','propertiesController@edit')->name('admin.properties.edit');
      Route::get('update/{id}','propertiesController@update')->name('admin.properties.update');
      Route::get('delete/{id}','propertiesController@delete')->name('admin.properties.delete');

      Route::get('price/{id}','PropertiesController@getprice') ->name('admin.properties.price');
      Route::post('price','PropertiesController@savePropertyPrice') ->name('admin.properties.price.store');

      Route::get('feature/{id}','PropertiesController@getPropertyFeature') ->name('admin.properties.features');
      Route::post('feature','PropertiesController@savePropertyFeature') ->name('admin.properties.features.store');

      Route::get('images/{id}','PropertiesController@addImages') ->name('admin.properties.images');
      Route::post('images','PropertiesController@savePropertyImages') ->name('admin.properties.images.store');
      Route::post('images/db', 'PropertiesController@savePropertyImagesDB')->name('admin.properties.images.store.db');

    });

    
       ################################## sliders ######################################
       Route::group(['prefix' => 'sliders'], function () {
        Route::get('/', 'SliderController@addImages')->name('admin.sliders.create');
        Route::post('images', 'SliderController@saveSliderImages')->name('admin.sliders.images.store');
        Route::post('images/db', 'SliderController@saveSliderImagesDB')->name('admin.sliders.images.store.db');

    });
    ################################## end sliders    #######################################



});



Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin','prefix'=>'admin'], function () {
    Route::get('login','LoginController@getLogin')-> name('get.admin.login');
    Route::post('login','LoginController@login')->name('admin.login');

});




});