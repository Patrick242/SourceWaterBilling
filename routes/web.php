<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'home'], function () {
    Route::get('', [
        'uses' => 'PostController@homeindex',
        'as' => 'home.index'
    ]);
});

Route::post('create', [
        'uses' => 'PostController@submitcontactus',
        'as' => 'create.contactus'
]);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('meter/calculator', [
        'uses' => 'UserDashboardController@meterReadingIndex',
        'as' => 'meter.index'
    ]);

    Route::post('create/meter-reading', [
        'uses' => 'UserDashboardController@createMeterReading',
        'as' => 'meter.create.bill'
    ]);

    Route::get('bill/index',[
        'uses' => 'UserDashboardController@UserBillIndex',
        'as' => 'bill.index'
    ]);

    Route::get('delete/{id}/bill', [
        'uses' => 'UserDashboardController@deleteBill',
        'as' => 'bill.delete'
    ]);

    Route::get('account-settings', [
        'uses' => 'UserDashboardController@getAccountSettingsindex',
        'as' => 'user.accountsettings'
    ]);

    Route::get('profile', [
        'uses' => 'UserDashboardController@getProfileIndex',
        'as' => 'user.profile'
    ]);
});

Auth::routes();