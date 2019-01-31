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

//NEW STUFF
Route::get('/about',     'ViewController@about');
Route::get('/index',     'ViewController@home');
Route::get('/',          'ViewController@home');
Route::get('/home',      'ViewController@home');
Route::get('/services',  'ViewController@services');

Route::resource('post',    'PostController');
Route::get('/post/recent', 'PostController@recent');

//DEFAULT WELCOME
// Route::get('/', function () {
//     return view('welcome');
// });

// PHP ARTISAN AUTH
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
