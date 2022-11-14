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

//TOPページ
Route::get('/', 'PostController@index');

//categoryページ（カテゴリごとにbladeファイル作るパターン）
// Route::get('/category/php', 'PostCategoryController@index');

//categoryページ（全カテゴリで共通のbladeファイル使うパターン）
Route::get('/category/{name}', 'PostCategoryController@index');
Route::get('/category/{name}/{id}', 'PostCategoryController@show');

Auth::routes();

//admin(管理画面)ページ
Route::get('/home', 'HomeController@index')->name('home');

//postの管理ページ
Route::get('/admin/posts', 'AdminPostController@index');
Route::get('/admin/post/new', 'AdminPostController@create');
Route::post('/admin/post/store', 'AdminPostController@store');
Route::get('/admin/post/edit/{id}', 'AdminPostController@edit');
Route::post('/admin/post/update/{id}', 'AdminPostController@update');
Route::post('/admin/post/destroy/{id}', 'AdminPostController@destroy');

Route::get('/admin/categories', 'AdminCategoryController@index');
Route::get('/admin/category/new', 'AdminCategoryController@create');
Route::post('/admin/category/store', 'AdminCategoryController@store');