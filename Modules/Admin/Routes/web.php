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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'category'], function (){
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');

        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');

        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');

        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });

    Route::group(['prefix' => 'CategoryNews'], function(){
    	Route::get('/', 'AdminCategoryNewsController@index')->name('admin.get.list.CategoryNews');

    	Route::get('/create', 'AdminCategoryNewsController@create')->name('admin.get.create.CategoryNews');
    	Route::post('/create', 'AdminCategoryNewsController@store');

        Route::get('/update/{id}', 'AdminCategoryNewsController@edit')->name('admin.get.edit.CategoryNews');
        Route::post('/update/{id}', 'AdminCategoryNewsController@update');

        Route::get('/{action}/{id}', 'AdminCategoryNewsController@action')->name('admin.get.action.CategoryNews');
    });
});
