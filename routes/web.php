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
Route::get('login', 'Admin\LoginController@login')->name('login');
Route::post('login', 'Admin\LoginController@post_login')->name('login');
Route::group(
    ['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'adminlogin'],
    function () {
        Route::get('/', 'AdminController@index')->name('local');
        include 'admin/User.php';
    }
);



Route::group(
    ['prefix' => 'Mshop', 'namespace' => 'Mshop'],
    function () {
        Route::get('/', 'MShopController@index')->name('mshop');
    }
);
Route::get('Home', 'HomeController@index');

Route::get('/', function () {
    return view('Mshop.index');
});
