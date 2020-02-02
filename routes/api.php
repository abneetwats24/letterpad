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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/','API\CgiController@index');
<<<<<<< HEAD
//Route::post('/ocr','API\CgiController@ocr');
=======
Route::post('/ocr','API\CgiController@ocr');
>>>>>>> 8f5e8d708de66de5968c804296eeea084ff872a8
