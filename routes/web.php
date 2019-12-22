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

Route::get('/', 'HomeController@getHome');

Route::get('/test', 'TestController@getTest');

Route::get('/apps', 'AppController@getApps');
Route::get('/apps/new', 'AppController@createApp');
Route::post('/apps', 'AppController@postApp');
Route::get('/apps/{id}', 'AppController@getApp');
Route::get('/apps/{id}/settings', 'AppController@getAppSettings');
Route::get('/apps/{id}/posts', 'AppController@getAppPosts');
Route::get('/apps/{id}/posts/new', 'AppController@createAppPost');
Route::post('/apps/{id}/posts', 'AppController@postAppPost');
Route::get('/apps/{id}/categories', 'AppController@getAppCategories');
Route::post('/apps/{id}/categories', 'AppController@postAppCategory');
Route::get('/apps/{id}/categories/new', 'AppController@createAppCategory');
Route::get('/apps/{id}/tags', 'AppController@getAppTags');
Route::get('/apps/{id}/tags/new', 'AppController@createAppTag');
Route::post('/apps/{id}/tags', 'AppController@postAppTag');
Route::get('/apps/{id}/feeds', 'AppController@getAppFeeds');
Route::get('/apps/{id}/navigation', 'AppController@getAppNavigation');
Route::post('/apps/{id}/settings', 'AppController@updateAppSettings');

Route::get('/login', 'AuthController@getLogin');

Auth::routes(['register' => false]);
