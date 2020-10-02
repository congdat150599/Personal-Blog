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

Route::get('/', [
    'uses' => 'BlogController@index',
    'as' => 'index_home'
]);

Route::get('/blog/blog', [
	'uses' => 'BlogController@blog',
	'as' => 'blog'
]);

// Route::get('layouts/blog',[
// 	'uses' => 'BlogController@featured',
// 	'as'   => 'featured'
// ]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/blog/{post}',[
	'uses' => 'BlogController@show',
	'as' => 'home.show'
]);

Route::get('/category/{category}',[
	'uses' => 'BlogController@category',
	'as' => 'category'
]);

Route::get('/author/{author}',[
	'uses' => 'BlogController@author',
	'as' => 'author'
]);

Route::get('/tag/{tag}',[
	'uses' => 'BlogController@tag',
	'as' => 'tag'
]);




Auth::routes();

Route::auth();

Route::get('/home', 'Backend\HomeController@index')->name('home');

Route::put('backend/blog/restore/{blog}',[
	'uses' => 'Backend\BlogController@restore',
	'as'   => 'backend.blog.restore'
]);

Route::delete('backend/blog/force-destroy/{blog}',[
	'uses' => 'Backend\BlogController@forceDestroy',
	'as'   => 'backend.blog.force-destroy'
]);

Route::resource('backend/blog', 'Backend\BlogController');

Route::resource('backend/category', 'Backend\CategoriesController');

Route::get('backend/users/confirm/{users}',[
	'uses' => 'Backend\UsersController@confirm',
	'as' => 'backend.users.confirm'
]);

Route::resource('backend/users', 'Backend\UsersController');


