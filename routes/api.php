<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
});
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('customers', 'CustomersController@all');
    Route::get('customers/{id}', 'CustomersController@get');
    Route::get('customers/new', 'CustomersController@new');
});

Route::get('/getAllProducts', 'ProductsController@getAllProducts');
Route::get('/getReviews', 'ReviewsController@getReviews');
Route::get('/showProductAndReviews/{id}', 'ProductsController@showProductAndReviews');
Route::post('/createProduct', 'ProductsController@createProduct');
Route::post('/createReview', 'ReviewsController@createReview');


// Route::get('customers', 'CustomersController@all');