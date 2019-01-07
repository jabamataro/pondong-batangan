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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/history', 'PagesController@history');
Route::get('/programs', 'PagesController@programs');

// Teachings
Route::get('/teachings/richman-poorman', 'PagesController@richManPoorMan');
Route::get('/teachings/meager-desire', 'PagesController@meagerDesire');
Route::get('/teachings/never-despise-the-least', 'PagesController@neverDespise');
Route::get('/teachings/funds-from-small-contributions', 'PagesController@smallContributions');
Route::get('/teachings/sacrament-of-the-small', 'PagesController@sacrament');
Route::get('/teachings/christian-charity-of-the-batangueno', 'PagesController@christianCharity');
Route::get('/teachings/a-way-to-love-a-way-of-life', 'PagesController@loveLife');

Route::resource('news', 'NewsController');

Route::get('/donations', 'DonationsController@index');

Route::get('/donations/create-step1', 'DonationsController@createStep1');
Route::post('/donations/create-step1', 'DonationsController@postCreateStep1');

Route::get('/donations/create-step2', 'DonationsController@createStep2');
Route::post('/donations/create-step2', 'DonationsController@postCreateStep2');

Route::get('/donations/create-step3-cash', 'DonationsController@createStep3cash');
Route::post('/donations/create-step3-cash', 'DonationsController@postCreateStep3cash');

Route::get('/donations/create-step3-bank', 'DonationsController@createStep3bank');
Route::post('/donations/create-step3-bank', 'DonationsController@postCreateStep3bank');

Route::get('/donations/create-step4', 'DonationsController@createStep4');

Route::post('/donations/store', 'DonationsController@store');

Route::resource('donations', 'DonationsController');