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

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('users/', 'UserController@index')->name('users.index')->middleware('auth');
Route::get('users/create', 'UserController@create')->name('users.create')->middleware('auth');
Route::post('users/store', 'RoleController@store')->name('users.store')->middleware('auth');
Route::get('users/{id}', 'RoleController@show')->name('users.show')->middleware('auth');
Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit')->middleware('auth');
Route::put('users/{id}', 'UserController@update')->name('users.update')->middleware('auth');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy')->middleware('auth');

Route::get('roles/', 'RoleController@index')->name('roles.index')->middleware('auth');
Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('auth');
Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('auth');
Route::get('roles/{id}', 'RoleController@show')->name('roles.show')->middleware('auth');
Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit')->middleware('auth');
Route::put('roles/{id}', 'RoleController@update')->name('roles.update')->middleware('auth');
Route::delete('roles/{id}', 'RoleController@destroy')->name('roles.destroy')->middleware('auth');

Route::get('unit-types/', 'UnitTypeController@index')->name('unit_types.index')->middleware('auth');
Route::get('unit-types/create', 'UnitTypeController@create')->name('unit_types.create')->middleware('auth');
Route::post('unit-types/store', 'UnitTypeController@store')->name('unit_types.store')->middleware('auth');
Route::get('unit-types/{id}', 'UnitTypeController@show')->name('unit_types.show')->middleware('auth');
Route::get('unit-types/{id}/edit', 'UnitTypeController@edit')->name('unit_types.edit')->middleware('auth');
Route::put('unit-types/{id}', 'UnitTypeController@update')->name('unit_types.update')->middleware('auth');
Route::delete('unit-types/{id}', 'UnitTypeController@destroy')->name('unit_types.destroy')->middleware('auth');

Route::get('regions/', 'RegionController@index')->name('regions.index')->middleware('auth');
Route::get('regions/create', 'RegionController@create')->name('regions.create')->middleware('auth');
Route::post('regions/store', 'RegionController@store')->name('regions.store')->middleware('auth');
Route::get('regions/{id}', 'RegionController@show')->name('regions.show')->middleware('auth');
Route::get('regions/{id}/edit', 'RegionController@edit')->name('regions.edit')->middleware('auth');
Route::put('regions/{id}', 'RegionController@update')->name('regions.update')->middleware('auth');
Route::delete('regions/{id}', 'RegionController@destroy')->name('regions.destroy')->middleware('auth');

Route::get('apartments/', 'ApartmentController@index')->name('apartments.index')->middleware('auth');
Route::get('apartments/create', 'ApartmentController@create')->name('apartments.create')->middleware('auth');
Route::post('apartments/store', 'ApartmentController@store')->name('apartments.store')->middleware('auth');
Route::get('apartments/{id}', 'ApartmentController@show')->name('apartments.show')->middleware('auth');
Route::get('apartments/{id}/edit', 'ApartmentController@edit')->name('apartments.edit')->middleware('auth');
Route::put('apartments/{id}', 'ApartmentController@update')->name('apartments.update')->middleware('auth');
Route::delete('apartments/{id}', 'ApartmentController@destroy')->name('apartments.destroy')->middleware('auth');

Route::get('units/', 'UnitController@index')->name('units.index')->middleware('auth');
Route::get('units/create', 'UnitController@create')->name('units.create')->middleware('auth');
Route::post('units/store', 'UnitController@store')->name('units.store')->middleware('auth');
Route::get('units/{id}', 'UnitController@show')->name('units.show')->middleware('auth');
Route::get('units/{id}/edit', 'UnitController@edit')->name('units.edit')->middleware('auth');
Route::put('units/{id}', 'UnitController@update')->name('units.update')->middleware('auth');
Route::delete('units/{id}', 'UnitController@destroy')->name('units.destroy')->middleware('auth');

Route::get('bookings/', 'BookingController@index')->name('bookings.index')->middleware('auth');
Route::get('bookings/create', 'BookingController@create')->name('bookings.create')->middleware('auth');
Route::post('bookings/store', 'BookingController@store')->name('bookings.store')->middleware('auth');
Route::get('bookings/{id}', 'BookingController@show')->name('bookings.show')->middleware('auth');
Route::get('bookings/{id}/edit', 'BookingController@edit')->name('bookings.edit')->middleware('auth');
Route::put('bookings/{id}', 'BookingController@update')->name('bookings.update')->middleware('auth');
Route::delete('bookings/{id}', 'BookingController@destroy')->name('bookings.destroy')->middleware('auth');
