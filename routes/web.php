<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/', function () {
    return view('welcome');
});
|

Route::get('/users/{id}/{name}', function($id, $name){
  return 'Name User:'.$name.'<br>'.'ID user'.$id;
});
Route::get('/hello', function () {
    return '<h1>Hello LARAVEL</h1>';
});
*/

//we can writ a route with under three way
//first:we called a function name of method name from Controller
//second we called a html name from view folder
//therd we can write what we want to see in browsers
Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/dashboard', 'dashboardController@index');
