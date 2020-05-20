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

Route::get('/admin','AdminFrontController@index');

//Route::resource('/admin/category','AdminCategoriesController');
Route::resource('/admin/categories','Admin\AdminCategoriesController');
Route::resource('/admin/tags','Admin\AdminTagsController');
Route::resource('/admin/users','Admin\AdminUsersController');
//Route::get('/admin','Admin\AdminDaschbordController@index');
Route::resource('/admin/posts','Admin\AdminPostsController');
