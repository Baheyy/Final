<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('authentication/register', 'AuthenticationController@register');

Route::post('register', 'AuthenticationController@store');

Route::get('authentication/login', 'AuthenticationController@login');

Route::post('login', 'AuthenticationController@authenticate');

Route::get('authentication/logout', 'AuthenticationController@Deauthenticate');

Route::get('admin/welcome', 'AdminController@index');

Route::get('admin/cards', 'AdminController@cards');

Route::post('CreateCards', 'AdminController@CreateCards');

Route::get('hotelreceptionist/welcome', 'HotelReceptionistController@index');

Route::get('hotelreceptionist/viewCards', 'HotelReceptionistController@viewCards');

Route::get('admin/bikes', 'AdminController@bikes');

Route::post('CreateBikes', 'AdminController@CreateBikes');

Route::get('admin/bikestations', 'AdminController@bikeStations');

Route::post('CreateBikeStations', 'AdminController@CreateBikeStations');

Route::get('admin/viewBikeStations', 'AdminController@viewBikeStations');

Route::get('bikestations', 'UserController@bikeStations');

Route::post('viewBikeStations', 'AdminController@viewBikes');

Route::get('/admin/updateMinTime', 'AdminController@UpdateMinTime');

Route::post('UpdateBikeTime', 'AdminController@UpdateBikeTime');

Route::get('/admin/updatePrice', 'AdminController@updatePrice');

Route::post('updatePrice', 'AdminController@updateBikePrice');

Route::get('Customer/welcome' ,'CustomerController@index');

Route::get('Customer/RentABike','CustomerController@RentABike');

Route::get('Customer/ViewRentedBikes','CustomerController@ViewRentedBikes');

Route::post('RentABike', 'CustomerController@RentTheBike');

Route::get('Customer/ParkABike','CustomerController@ParkABike');

Route::post('ParkABike', 'CustomerController@ParkTheBike');

Route::get('Customer/OutstandingPrice', 'CustomerController@viewOutstandingPrice');

Route::get('Customer/OutstandingTime', 'CustomerController@viewOutstandingTime');

Route::get('hotelreceptionist/viewCustomersData', 'HotelReceptionistController@viewCustomersData');

Route::get('customers/{id}', 'HotelReceptionistController@viewEachCustomerData');

Route::get('admin/totalOutstandingPayments', 'AdminController@totalOutstandingPayments');

Route::get('admin/totalOutstandingTimes', 'AdminController@totalOutstandingTimes');

Route::get('Customer/ViewBikesInStation', 'CustomerController@ViewBikesInStation');

Route::post('viewBikesInTheStation', 'CustomerController@viewBikes');

Route::get('admin/viewProcesses', 'AdminController@viewProcesses');

Route::get('Customer/viewCustomerProcesses', 'CustomerController@viewCustomerProcesses');

Route::get('hotelreceptionist/viewHotelProcesses', 'HotelReceptionistController@viewHotelProcesses');