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

//Route::get('/home', 'HomeController@getIndex')->name('home');

Route::get('login','HomeController@getLogin')->name('login');
Route::post('login','HomeController@postLogin')->name('login');
Route::get('register','HomeController@getRegister')->name('register');
Route::post('register','HomeController@postRegister')->name('register');
Route::get('logout','HomeController@getLogout')->name('logout');
Route::get('search','HomeController@getSearch')->name('search');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin-'], function () {
    // show form login if login yet
    Route::get('login', 'LoginController@login')->name('login');
    Route::post('login', 'LoginController@handleLogin')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    Route::group(['middleware' => 'check_admin_login'], function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::group(['prefix' => 'category', 'as' => 'category-'], function () {
            Route::get('/', 'CategoryController@index')->name('index');
            Route::get('/add', 'CategoryController@create')->name('add');
            Route::post('/add', 'CategoryController@store')->name('add');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
            Route::post('/edit/{id}', 'CategoryController@update')->name('edit');
            Route::get('/detail/{id}', 'CategoryController@show')->name('detail');
            Route::post('/delete/{id}', 'CategoryController@destroy')->name('delete');
        });

        Route::group(['prefix' => 'user', 'as' => 'user-'], function () {
            Route::get('/', 'UserController@index')->name('index');
            Route::get('/add', 'UserController@create')->name('add');
            Route::post('/add', 'UserController@store')->name('add');
            Route::get('/edit/{id}', 'UserController@edit')->name('edit');
            Route::post('/edit/{id}', 'UserController@update')->name('edit');
            Route::get('/detail/{id}', 'UserController@show')->name('detail');
            Route::post('/delete/{id}', 'UserController@destroy')->name('delete');
        });

        Route::group(['prefix' => 'product', 'as' => 'product-'], function () {
            Route::get('/', 'ProductController@index')->name('index');
            Route::get('/add', 'ProductController@create')->name('add');
            Route::post('/add', 'ProductController@store')->name('add');
            Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
            Route::post('/edit/{id}', 'ProductController@update')->name('edit');
            Route::get('/detail/{id}', 'ProductController@show')->name('detail');
            Route::post('/delete/{id}', 'ProductController@destroy')->name('delete');
        });

        Route::group(['prefix' => 'order', 'as' => 'order-'], function () {
            Route::get('/', 'OrderController@index')->name('index');
            Route::get('/add', 'OrderController@create')->name('add');
            Route::post('/add', 'OrderController@store')->name('add');
            Route::get('/edit/{id}', 'OrderController@edit')->name('edit');
            Route::post('/edit/{id}', 'OrderController@update')->name('edit');
            Route::get('/detail/{id}', 'OrderController@show')->name('detail');
            Route::post('/delete/{id}', 'OrderController@destroy')->name('delete');
        });

        Route::group(['prefix' => 'supplier', 'as' => 'supplier-'], function () {
            Route::get('/', 'SupplierController@index')->name('index');
            Route::get('/add', 'SupplierController@create')->name('add');
            Route::post('/add', 'SupplierController@store')->name('add');
            Route::get('/edit/{id}', 'SupplierController@edit')->name('edit');
            Route::post('/edit/{id}', 'SupplierController@update')->name('edit');
            Route::get('/detail/{id}', 'SupplierController@show')->name('detail');
            Route::post('/delete/{id}', 'SupplierController@destroy')->name('delete');
        });


    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
