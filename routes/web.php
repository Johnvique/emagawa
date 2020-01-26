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

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard/index', 'DashboardController@index');
    Route::get('dashboard/chef', 'ChefController@index');
    Route::get('dashboard/employee', 'EmployeeController@index');
    Route::get('dashboard/guest', 'GuestController@index');
    Route::get('dashboard/menu', 'MenuController@index');
    Route::get('dashboard/reservation', 'ReservationController@index');
    Route::get('dashboard/room', 'RoomController@index');
    Route::get('dashboard/service', 'ServiceController@index');
    Route::get('dashboard/notice', 'NoticeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('chef', 'ChefController');
Route::resource('employee', 'EmployeeController');
Route::resource('guest', 'GuestController');
Route::resource('menu', 'MenuController');
Route::resource('reservation', 'ReservationController');
Route::resource('room', 'RoomController');
Route::resource('service', 'ServiceController');
Route::resource('notice', 'NoticeController');