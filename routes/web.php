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

// Some Examples

// Route::get('/hello', function () {
//     return '<h1>Hello World</h1';
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user ' .$name . ' with an id: ' . $id;
// });

// Base Routes

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

// Posts Rooutes
Route::resource('posts', 'PostsController');
