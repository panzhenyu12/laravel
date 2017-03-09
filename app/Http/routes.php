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



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/','HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('now', function () {
        return date("Y-m-d H:i:s");
    });
});
Route::group(['middleware' =>['access','api'] ,'prefix' => 'api','namespace'=>'Api'], function () {

    Route::post('time','timeController@index');
    Route::get('time','timeController@getAll');
});
/*Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::auth();
    Route::get('/', 'HomeController@index');
});*/
Route::group(['middleware' => ['web','auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::auth();  //加上这个之后变不会再跳到 HomeController 而是 Admin/HomeController
    Route::get('/', 'HomeController@index');
    //Route::get('article', 'ArticleController@index');
    Route::resource('article', 'ArticleController');

   // Route::get('article', 'ArticleController@index');
});


