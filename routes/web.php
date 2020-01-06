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
    Route::get('/dashboard/index', function () {
        return view('dashboard/index');
    });
    Route::get('/dashboard/chef', function () {
        return view('dashboard/chef');
    });
    Route::get('/dashboard/employee', function () {
        return view('dashboard/employee');
    });
    Route::get('/dashboard/guest', function () {
        return view('dashboard/guest');
    });
    Route::get('/dashboard/menu', function () {
        return view('dashboard/menu');
    });
    Route::get('/dashboard/reservation', function () {
        return view('dashboard/reservation');
    });
    Route::get('/dashboard/room', function () {
        return view('dashboard/room');
    });
    Route::get('/dashboard/service', function () {
        return view('dashboard/service');
    });
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