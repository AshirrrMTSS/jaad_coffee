<?php

use Illuminate\Http\Request;

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

// Route::middleware(['urlAuth'])->group(function () {
    Route::get('/dashboard/stats', 'API\DashboardController@stats');

    Route::get('/domains', 'API\DomainController@index')->middleware('urlAuth');
    Route::post('/domains', 'API\DomainController@store');
    Route::put('/domains/{id}', 'API\DomainController@update');
    Route::delete('/domains/{id}', 'API\DomainController@destroy');

// });


