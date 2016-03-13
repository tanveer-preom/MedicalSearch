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

Route::get('', 'PageController@index');


// Authentication routes...
Route::get('login', 'myAuth@getLogin');
Route::get('logout', 'myAuth@getLogout');
Route::post('login', 'myAuth@postLogin');


//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('results', 'PageController@search');


Route::post('results', 'PageController@search_result');
/*
Route::post('results', function(Request $request){
	//echo '1234';
	//echo $request->input('search');
	dd (Input::all());
	dd($request);

});*/


Route::get('test/{id}','PageController@showTest');

//User profile
Route::resource('User', 'UserLoginController');

Route::get('User/{id}/posts', 'UserPostController@index');



?>