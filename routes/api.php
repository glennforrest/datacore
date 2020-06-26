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

Route::get('/biomes', 'BiomeController@getJSON');

Route::get('/charges', 'ChargeController@getJSON');
Route::post('/charges', 'ChargeController@storeFromJson')->middleware('auth:api');

Route::get('/domains', 'DomainController@getJSON');

Route::get('/minerals', 'MineralController@getJSON');

Route::get('/patterns', 'PatternController@getJSON');
Route::post('/patterns', 'PatternController@storeFromJson')->middleware('auth:api');

Route::get('/professions', 'ProfessionController@getJSON');

Route::get('/resources', 'ResourceController@getJSON');

Route::get('/species', 'SpeciesController@getJSON');
Route::post('/species', 'SpeciesController@storeFromJson')->middleware('auth:api');
