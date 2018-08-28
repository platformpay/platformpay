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
Route::group(['domain' => '{id}.platformpay.loc'], function () {
  Route::get('/', function ($id) {
    return 'THIS IS SHOP: ' . $id;
  });
});
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::group(['prefix' => 'partner', 'middleware' => ['auth']], function(){
       Route::get('/', 'DashboardController@index')->name('dashboard.index');
       Route::get('/stats', 'StatsController@index')->name('dashboard.stats');
       Route::get('/shops', 'ShopsController@index')->name('dashboard.shops');
       Route::get('/balance', 'BalanceController@index')->name('dashboard.balance');
       Route::get('/settings', 'SettingsController@index')->name('dashboard.settings');
       Route::get('/help', 'HelpController@index')->name('dashboard.help');
});
