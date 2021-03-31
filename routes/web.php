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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//complaints Controller
Route::resource('complaintPosts', 'ComplaintPostController');
Route::GET('complaints', 'ComplaintPostController@showall');


//register admin controller
Route::post('/admins', 'AdminController@store');
Route::get('/admins', 'AdminController@index');
Route::get('/admins/create', 'AdminController@create');
Route::get('/admins/{id}', 'AdminController@destroy');
