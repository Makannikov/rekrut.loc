<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/page/{cat}/{id}',function($id){
	echo $id;
})->where(['id' => '[0-9]+', 'cat' => '[a-z]+']);


Route::get('about/{id}','FirstController@show');

//List pages
Route::resource('/pages','Admin\CoreResource');