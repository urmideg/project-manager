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

// Маршрут для главной страницы
Route::get('/', 'MainController@index');

/**
 * Группа маршрутов для панели администратора
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    // маршрут для главной старницы панели администратора
    Route::get('/', 'DashboardController@index')->name('admin.index');
    // маршруты только для ведущего программиста
    Route::group(['middleware' => ['can:senior'] ], function () {
        // маршрут для ресурсного контроллера
        Route::resource('/user', 'UserController', ['as' => 'admin']);
    });
    // маршрут для ресурсного контроллера TaskController
    Route::resource('/task', 'TaskController', ['as' => 'admin']);
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
