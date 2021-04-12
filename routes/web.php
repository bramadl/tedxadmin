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

Route::view('/', 'home');
// Route::view('merch/pembelian','products.merchandise.pembelian.index');
// Route::view('merch/pembayaran','products.merchandise.pembayaran.index');


Route::view('tickets/pembayaran','products.tickets.pembayaran.index');
Route::view('tickets/pembelian','products.tickets.pembelian.index');

Route::view('users/audiens', 'users.audiens.index');
Route::view('users/volunteers', 'users.volunteers.index');
Route::view('users/cores', 'users.cores.index');

Route::view('account/profile', 'account.profile.index');
Route::view('account/settings', 'account.settings.index');

Route::view('auth/login', 'auth.login');
Route::view('auth/register', 'auth.register');

Route::post('/merchandise/pembayaran/{id}/confirm', 'PaymentsController@confirm');
Route::post('/merchandise/pembayaran/{id}/decline', 'PaymentsController@decline');
Route::resources([
  'merchandise/pembelian' => 'OrdersController',
  'merchandise/pembayaran' => 'PaymentsController',
  'merchandise/pengiriman' => 'DeliveryController',
]);