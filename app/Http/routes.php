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
    return view('home');
});

Route::get('/boxed', function () {
    return view('boxed');
});

Route::get('/profile', function () {
    return view('/profile');
});


Route::auth();

Route::get('/home', 'HomeController@index');
//Route::post('/Register','HomeController@uploadphoto');

Route::get('/', 'HomeController@index');



Route::get('api/allUsers', 'UserController@getUsers');


Route::resource('user','UserController');
Route::get('/user/{id}/modif',[ 'as' => 'user.modifUser', 'uses' => 'UserController@modifUser']);




Route::get('/edit/{id}','HomeController@afficheruser');

