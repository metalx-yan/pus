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
    return view('dash');
})->name('root');


// Route::get('/navs', function () {
//     return view('dash');
// });

// Route::get('/navs', 'TestController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
