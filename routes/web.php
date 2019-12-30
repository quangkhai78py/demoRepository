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

route::group([
    'namespace'=>'Frontend',
],function(){
   Route::get('/show/post','PostController@showPost')->name('show.post');
   Route::post('/show/post','PostController@createPost')->name('create.post');
   //
   Route::get('/show/table/post','PostController@showTable')->name('show.table');
   //
   Route::get('/edit/post/{id}','PostController@showEdit')->name('show.edit.post');
   Route::post('/edit/post/{id}','PostController@postUpdate')->name('post.update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
