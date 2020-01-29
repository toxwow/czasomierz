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



Route::get('/app', 'HomeController@index')->name('app');

//Route::get('/section', 'SectionController@index')->name('section');
Route::group(['prefix' => 'section'], function() {
    Route::get('/', 'SectionController@index')->name('section');
    Route::get('/{id}', 'SectionController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
});

//Auth::routes();
Route::get('/', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('/', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
