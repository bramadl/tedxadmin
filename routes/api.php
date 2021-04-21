<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/audiens/{id}/orders', 'AudiensController@orders');
Route::get('/audiens/{id}/verify/{token}', 'AudiensController@verify');
Route::delete('/audiens/{uid}/logout/{token}', 'AudiensController@logout');

Route::post('/loka-hasta-karya', 'LokaHastaKaryaController@store');

Route::get('/orders/{id}/{username}', 'OrdersController@show');
Route::post('/orders', 'OrdersController@store');

Route::post('/payments', 'PaymentsController@store');