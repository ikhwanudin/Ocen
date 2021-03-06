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

Route::get('/', 'PagesController@index');

Route::get('/posts', 'PagesController@posts')->name('posts');
Route::get('/posts/{post}', 'PagesController@show')->name('show');

Route::resource('dashboard/posts', 'PostsController');

Auth::routes();
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/{page}', 'PagesController@pageShow');
