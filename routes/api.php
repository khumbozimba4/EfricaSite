<?php

use Illuminate\Support\Facades\Route;

// Routes for ArticleController
Route::get('/v1/article/getAllArticles', 'App\Http\Controllers\API\V1\ArticleController@index');
Route::post('/v1/article/addArticle', 'App\Http\Controllers\API\V1\ArticleController@store');
Route::get('/v1/article/{id}/getArticleById', 'App\Http\Controllers\API\V1\ArticleController@show');
Route::get('/v1/article/{slug}/getArticleBySlug', 'App\Http\Controllers\API\V1\ArticleController@showBySlug');
Route::put('/v1/article/{id}/updateArticleById', 'App\Http\Controllers\API\V1\ArticleController@update');
Route::delete('/v1/article/{id}/deleteArticleById', 'App\Http\Controllers\API\V1\ArticleController@destroy');


// Routes for ServiceController
Route::get('/v1/service/getAllServices', 'App\Http\Controllers\API\V1\ServiceController@index');
Route::post('/v1/service/addService', 'App\Http\Controllers\API\V1\ServiceController@store');
Route::get('/v1/service/{id}/getServiceById', 'App\Http\Controllers\API\V1\ServiceController@show');
Route::get('/v1/service/{slug}/getServiceBySlug', 'App\Http\Controllers\API\V1\ServiceController@showBySlug');
Route::put('/v1/service/{id}/updateServiceById', 'App\Http\Controllers\API\V1\ServiceController@update');
Route::delete('/v1/service/{id}/deleteServiceById', 'App\Http\Controllers\API\V1\ServiceController@destroy');


// Routes for SettingController
Route::get('/v1/setting/getAllSettings', 'App\Http\Controllers\API\V1\SettingController@index');
Route::post('/v1/setting/addSetting', 'App\Http\Controllers\API\V1\SettingController@store');
Route::get('/v1/setting/{id}/getSettingById', 'App\Http\Controllers\API\V1\SettingController@show');
Route::put('/v1/setting/{id}/updateSettingById', 'App\Http\Controllers\API\V1\SettingController@update');
Route::delete('/v1/setting/{id}/deleteSettingById', 'App\Http\Controllers\API\V1\SettingController@destroy');


// Routes for UserController
Route::get('/v1/user/getAllUsers', 'App\Http\Controllers\API\V1\UserController@index');
Route::post('/v1/user/addUser', 'App\Http\Controllers\API\V1\UserController@store');
Route::post('/v1/user/login', 'App\Http\Controllers\API\V1\UserController@login');
Route::get('/v1/user/{id}/getUserById', 'App\Http\Controllers\API\V1\UserController@show');
Route::put('/v1/user/{id}/updateUserById', 'App\Http\Controllers\API\V1\UserController@update');
Route::delete('/v1/user/{id}/deleteUserById', 'App\Http\Controllers\API\V1\UserController@destroy');


