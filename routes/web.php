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

use App\Http\Controllers\UserController;

Route::get('/', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ProjectController@index');
Route::get('/boards', 'BoardController@index');
Route::view('/new_project', 'projects.new_project');
Route::view('/edit_project', 'projects.edit_project');
Route::view('/columns', 'projects.columns');
Route::view('/edit_board', 'projects.edit_board');
Route::get('/boards/detail','TaskController@index')->name('boards-detail');