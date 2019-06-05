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

Route::get('/', 'HomeControllerA@getLast5posts')->name('home');
Route::get('category/{name}', 'CategoryController@getPostByCategoryName')->name('post.by.category');
Route::get('admin/post/new', 'AdminController@createNewPost')->name('create.new.post');
Route::post('admin/post/new', 'AdminController@saveNewPost')->name('save.new.post');
Route::get('admin/post/edit/{id}', 'PostController@editPost')->name('edit.post');
Route::patch('admin/post/edit/{id}', 'PostController@updatePost')->name('update.post');
Route::get('/search', 'HomeController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
