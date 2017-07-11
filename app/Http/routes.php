<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('/products', 'ProductController@list');
Route::get('/products/show/{id}', 'ProductController@show');
Route::get('/products/new', 'ProductController@new');

Route::post('/products/create', 'ProductController@create');
Route::get('/products/delete/{id}', 'ProductController@delete');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::group(['prefix'=>'api'],function() {
    // Route::get('products', ['as'=> 'products', function() {
    //   return App\Product::all();
    // }]);
    Route::resource('products', 'ProductController',
    ['only' => ['index', 'store', 'update']]);
});
