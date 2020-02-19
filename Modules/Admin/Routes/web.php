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

    /*  Danh mục sản phẩm  */

    Route::group(['prefix' => 'category'], function (){
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');

        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');

        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');

        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });

    /*  Danh mục tin túc  */

    Route::group(['prefix' => 'CategoryNews'], function(){
    	Route::get('/', 'AdminCategoryNewsController@index')->name('admin.get.list.CategoryNews');

    	Route::get('/create', 'AdminCategoryNewsController@create')->name('admin.get.create.CategoryNews');
    	Route::post('/create', 'AdminCategoryNewsController@store');

        Route::get('/update/{id}', 'AdminCategoryNewsController@edit')->name('admin.get.edit.CategoryNews');
        Route::post('/update/{id}', 'AdminCategoryNewsController@update');

        Route::get('/{action}/{id}', 'AdminCategoryNewsController@action')->name('admin.get.action.CategoryNews');
    });

    /*  Sản phẩm  */
    Route::group(['prefix' => 'product'], function (){
       Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');

       Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
       Route::post('/create', 'AdminProductController@store');

       Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.get.edit.product');
       Route::post('/update/{id}', 'AdminProductController@update');

       Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');
    });

    /*  Tin tức  */
    Route::group(['prefix' => 'news'], function (){
        Route::get('/', 'AdminNewsController@index')->name('admin.get.list.news');

        Route::get('/create', 'AdminNewsController@create')->name('admin.get.create.news');
        Route::post('/create', 'AdminNewsController@store');

        Route::get('/update/{id}', 'AdminNewsController@edit')->name('admin.get.edit.news');
        Route::post('/update/{id}', 'AdminNewsController@update');

        Route::get('/{action}/{id}', 'AdminNewsController@action')->name('admin.get.action.news');
    });

    /*  Quản lý đơn hàng  */

    Route::group(['prefix' => 'transaction'], function (){
        Route::get('/', 'AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}', 'AdminTransactionController@viewOrder')->name('admin.get.view.product');
//        Route::get('/{action}/{id}', 'AdminTransactionController@action')->name('admin.get.action.product');

    });

    /* Quản lý thành viên */

    Route::group(['prefix' => 'user'], function (){
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');

    });

});
