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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
Route::post('email', ['uses' => 'IndexController@email', 'as' => 'email']);
Route::get('email', ['uses' => 'IndexController@email']);
Route::get('news/{id}', ['uses' => 'IndexController@show', 'as' => 'oneNews']);
Route::post('/news', ['uses' => 'IndexController@destroy', 'as' => 'delete'])->middleware('auth');
Route::post('comment', ['uses' => 'IndexController@addComment', 'as' => 'addComment'])->middleware('auth');





Auth::routes();

Route::group(['prefix' => 'home', 'middleware' => 'auth'], function(){
    Route::get('/', 'IndexController@home')->name('home');
    Route::get('/user', 'IndexController@user')->name('userInfo');
    Route::get('/add', 'IndexController@store')->name('add');
    Route::post('/add', 'IndexController@store')->name('postAdd');
    Route::get('/token', function () {
        return Auth::user()->createToken(\Auth::user()->id);
    })->name('token');
});
