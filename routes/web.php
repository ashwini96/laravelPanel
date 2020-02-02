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

Route::get('/', 'pagesController@index');

// Auth::routes();

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');

Route::get('/admin', 'adminController@adminHome')->middleware('role');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts','pagesController@create');
 
Route::post('/postsaction','pagesController@store');

Route::get('/activity','pagesController@act')->name('activity');

Route::get('/useract','adminController@act')->name('useract');

Route::get('/user','adminController@use')->name('user');

Route::get('/delete/{post}','pagesController@delete');

Route::get('/del/{email}','adminController@delete');

Route::get('/edit/{id}','pagesController@show');

Route::post('/edit/{id}','pagesController@edit');

Route::get('/ed/{id}','adminController@show');

Route::post('/ed/{id}','adminController@edit');

Route::any('/upuser/{id}','adminController@update');

?>