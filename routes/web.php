<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/', 'PostController@index');
// Route::get('/php', 'PostController@index');
// Route::get('/laravel', 'PostController@index');
Route::get('/php', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/posts', 'AdminPostController@index');
Route::get('/admin/post/new', 'AdminPostController@create');
Route::post('/admin/post/store', 'AdminPostController@store');

Route::get('/admin/categories', 'AdminCategoryController@index');
Route::get('/admin/category/new', 'AdminCategoryController@create');
Route::post('/admin/category/store', 'AdminCategoryController@store');