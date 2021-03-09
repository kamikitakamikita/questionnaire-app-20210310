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
Route::get('/questionnaire/index', 'QuestionnaireController@index')->name('questionnaire.index');
Route::post('/questionnaire/index', 'QuestionnaireController@create')->name('questionnaire.create');
Route::get('/dashboard/index', 'DashboardsController@index')->name('dashboard.index');
Route::get('/dashboard/index/{id}', 'DashboardsController@show')->name('dashboard.show');