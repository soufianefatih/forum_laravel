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

Route::get('/','App\Http\Controllers\FrontendController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/new-topic', function () {
    return view('client.new-topic');
});

Route::get('/category/overview/{id}','App\Http\Controllers\FrontendController@categoryOverview')->name('category.overview');

Route::get('/topic', function () {
    return view('client.topic');
});

Route::get('/forum /overview/{id}','App\Http\Controllers\FrontendController@forumOverview')->name('forum.overview');

route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');
/////////////////////////////////////:category
route::get('dashboard/category/new', 'App\Http\Controllers\CategoryController@create')->name('category.new');

route::post('dashboard/category/new', 'App\Http\Controllers\CategoryController@store')->name('category.store');

route::get('dashboard/categories', 'App\Http\Controllers\CategoryController@index')->name('categories');

route::get('dashboard/categories/{id}', 'App\Http\Controllers\CategoryController@show')->name('category');

route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
route::post('dashboard/categories/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
route::get('dashboard/categories/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
//////////////////////: forum
route::get('dashboard/forum/new', 'App\Http\Controllers\ForumController@create')->name('forum.new');

route::post('dashboard/forum/new', 'App\Http\Controllers\ForumController@store')->name('forum.store');

route::get('dashboard/forums', 'App\Http\Controllers\ForumController@index')->name('forums');


route::get('dashboard/forums/{id}', 'App\Http\Controllers\ForumController@edit')->name('forum');

route::get('dashboard/forums/edit/{id}', 'App\Http\Controllers\ForumController@edit')->name('forum.edit');
route::post('dashboard/forums/update/{id}', 'App\Http\Controllers\ForumController@update')->name('forum.update');
route::get('dashboard/forums/destroy/{id}', 'App\Http\Controllers\Forum*Controller@destroy')->name('forum.destroy');
