<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

    Route::post('register', [AuthController::class,'register']);
});

Route::group([

    'middleware' => 'auth:api',
    'prefix' => '/v1/admin/'

], function ($router) {
    //usuarios
    Route::get('users', [UserController::class,'index']);
    Route::post('users', [UserController::class,'store']);
    //validar admin
    Route::get('userss', [UserController::class,'validarAdmin']);
});

Route::prefix('/v1')->group( function () {

    Route::middleware('auth:api')->get('/productosuser', [RelacionController::class, 'show']);

}
);