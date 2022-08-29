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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Auth\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\Auth\AuthController::class, 'me']);

});

//Route::apiResources(['add' => \App\Http\Controllers\Api\UserController::class,
// 'index']);
Route::apiResources(['add' => \App\Http\Controllers\Api\UserController::class,
]);


//Route::apiResources(['add' => \App\Http\Controllers\Api\UserController::class,'index']);

//Route::apiResources(['api_login' => \App\Http\Controllers\Api\CheckController::class,]);


//Route::post('api_login', [\App\Http\Controllers\Api\CheckController::class, 'index']);

Route::group(['namespace' => '\App\Http\Controllers\Api', 'middleware' => 'jwt.auth'], function () {

  //  Route::apiResources(['api_login' =>
  //      \App\Http\Controllers\Api\CheckController::class,]);
} );

Route::apiResources(['api_login' => \App\Http\Controllers\Api\CheckController::class,]);

/*Route::get('/api_login', [\App\Http\Controllers\Api\Check1Controller::class, 'index'])
    ->name('check1_user');*/


/*Route::apiResources([
    'add' => \App\Http\Controllers\Api\UserController::class,
]);*/
