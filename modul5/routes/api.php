<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TicketController;

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

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register',[AuthController::class,'register']);
        Route::post('login',[AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout']);
        Route::post('refresh',[AuthController::class,'refresh']);
        Route::post('me',[AuthController::class,'me']);
    });
    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('ticket', TicketController::class, [
            'as' => 'api'
        ]);
    });
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});
