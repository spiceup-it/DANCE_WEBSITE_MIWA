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

Route::get('/', 'PagesController@getIndex');

Route::get('/about', 'PagesController@getAbout');

Route::get('/class', 'PagesController@getClass');

Route::get('/instructor', 'PagesController@getInstructor');

//gallery
Route::group(['prefix' => 'gallery'],function(){
	Route::get('/','GalleriesController@index');
	Route::match(['get','post'],'create','GalleriesController@create');
	Route::match(['get','put'],'update/{id}','GalleriesController@update');
	Route::delete('delete/{id}','GalleriesController@delete');
});

//blog
Route::get('/blog','ArticleController@index');
Route::get('/blog/create','ArticleController@create');
Route::post('/blog/create','ArticleController@store');
Route::get('/blog/edit/{id}','ArticleController@edit');

Route::post('/blog/edit','ArticleController@update');

Route::post('/blog/edit','ArticleController@update');
Route::get('/blog/delete/{id}','ArticleController@show');
Route::post('/blog/delete','ArticleController@delete');




//contact
Route::get('/contact','MessageController@getIndex');

Route::get('/contact/messages','MessageController@getMessages');

Route::post('/contact/submit','MessageController@submit');


//fqa
Route::get('/fqa','PagesController@getFqa');









