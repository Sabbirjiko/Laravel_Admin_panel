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

Route::any('/admin','AdminController@login')->name('admin_login');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
	
	Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin_dashboard');
	Route::get('/admin/settings', 'AdminController@settings')->name('admin_settings');
	Route::get('/admin/check_pass', 'AdminController@check_pass')->name('admin_check_pass');
	Route::any('/admin/update_pass', 'AdminController@update_pass')->name('admin.update_pass');

});


Route::get('/logout', 'AdminController@logout')->name('admin_logout');
Route::get('/home', 'HomeController@index')->name('home');

