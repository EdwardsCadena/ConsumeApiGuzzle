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

Route::get('/',["as"=>"route.post","uses"=>"PostController@index"]);

Route::get('posts/{id}',["as"=>"route.show","uses"=>"PostController@show"]);
