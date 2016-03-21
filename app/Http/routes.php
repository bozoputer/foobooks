<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        #return view('welcome');
        return 'Hello! Welcome to my Laravel application!';
    });

    Route::get('/books', 'BookController@getIndex');

    Route::get('/book/create', 'BookController@getCreate');

    Route::post('/book/create', 'BookController@postCreate');

    Route::get('/book/{id}', 'BookController@getShow');

    //Practice route
    Route::get('/practice', function() {

        $random = new Random();

        return $random->getRandomString(40);
    });

});
