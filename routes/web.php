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

Route::group([
  'middleware' => 'cores'
], function () {
  Route::view('/', 'home')->name('dashboard');
  
  Route::view('tickets/pembayaran','products.tickets.pembayaran.index');
  Route::view('tickets/pembelian','products.tickets.pembelian.index');
  
  Route::view('users/volunteers', 'users.volunteers.index');
  Route::view('users/cores', 'users.cores.index');
  
  Route::view('account/profile', 'account.profile.index');
  Route::view('account/settings', 'account.settings.index');
  
  Route::post('/merchandise/pembayaran/{id}/confirm', 'PaymentsController@confirm');
  Route::post('/merchandise/pembayaran/{id}/decline', 'PaymentsController@decline');

  Route::post('/loka-hasta-karya/{id}/confirm', 'LokaHastaKaryaController@confirm');
  Route::post('/loka-hasta-karya/{id}/decline', 'LokaHastaKaryaController@decline');
  
  Route::resources([
    'merchandise/pembelian' => 'OrdersController',
    'merchandise/pembayaran' => 'PaymentsController',
    'merchandise/pengiriman' => 'DeliveryController',

    'loka-hasta-karya' => 'LokaHastaKaryaController',
  
    'users/audiens' => 'AudiensController'
  ]);
});

Route::group([
  'middleware' => 'guest:cores'
], function () {
  Route::get('auth/login', 'Auth\LoginController@index')->name('login');
  Route::post('auth/login', 'Auth\LoginController@login');

  Route::get('auth/register', 'Auth\RegisterController@index')->name('register');
  Route::post('auth/register', 'Auth\RegisterController@register');
});

Route::post('auth/logout', 'Auth\LogoutController@logout')->name('logout');