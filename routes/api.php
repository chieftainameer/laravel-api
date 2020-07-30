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
Route::get('/countries','Country\CountryController@index')->name('countries');
Route::get('/countries/{country}','Country\CountryController@indv_country')->name('individual-country');
//Route::view('/create','create_country');
Route::post('/country/create','Country\CountryController@store')->name('store-country');
Route::put('/countries/{country}/update','Country\CountryController@update');
Route::delete('countries/{country}/delete','Country\CountryController@destroy');
