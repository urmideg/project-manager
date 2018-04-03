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

Route::get('/', function () {
    return view('welcome');
});

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

Auth::routes();
