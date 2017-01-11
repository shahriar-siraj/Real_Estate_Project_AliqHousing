<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::post('/home/addClicks', 'HomeController@addClicks');
Route::get('/google7be9bfc400627c7f.html', 'HomeController@google7be9bfc400627c7f');
Route::get('/admin', 'AdminController@index');

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/logout', 'AdminController@logout');

Route::post('/admin/getWhatsAppData', 'AdminController@getWhatsAppData');
Route::post('/admin/getPhoneData', 'AdminController@getPhoneData');
Route::post('/admin/getBuildingData', 'AdminController@getBuildingData');
Route::post('/admin/getVisitorsData', 'AdminController@getVisitorsData');
Route::post('/admin/clearHistory', 'AdminController@clearHistory');

Route::get('/admin/profile', 'AdminController@profile');
Route::post('/admin/updateProfile', 'AdminController@updateProfile');
Route::get('/admin/visitors', 'AdminController@visitors');

Route::resource('/admin/categories', 'CategoryController');
Route::resource('/admin/textboxes', 'TextboxController');
Route::resource('/admin/images', 'ImageController');
Route::resource('/admin/pages', 'PageController');
Route::resource('/text', 'TextController');
Route::resource('/blogs', 'BlogController');