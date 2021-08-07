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

Route::post('issue', 'App\Http\Controllers\ApiController@createIssue');
Route::get('issue/{id}', 'App\Http\Controllers\ApiController@getIssue');
Route::put('issue/{id}', 'App\Http\Controllers\ApiController@updateIssue');
Route::delete('issue/{id}','App\Http\Controllers\ApiController@deleteIssue');


Route::post('category', 'App\Http\Controllers\ApiController@createCategory');
Route::post('subcategory', 'App\Http\Controllers\ApiController@createsubCategory');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
