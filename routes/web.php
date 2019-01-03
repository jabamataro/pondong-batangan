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
Route::resource('donations', 'DonationsController');