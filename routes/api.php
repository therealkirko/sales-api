<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\Auth\LoginController;
use App\Http\Controllers\API\V1\Auth\RegisterController;
use App\Http\Controllers\API\V1\BusinessController;
use App\Http\Controllers\API\V1\ClientController;
use App\Http\Controllers\API\V1\NotifyController;
use App\Http\Controllers\API\V1\OrderController;
use GuzzleHttp\Middleware;

Route::group(['prefix' => 'v1'], function() {
    Route::get('/', function() {
        return 'Welcome to sales api. This is v1.0';
    });

    Route::group(['prefix' => 'auth'], function() {
        Route::post('register', [RegisterController::class, 'index']);
        Route::post('login', [LoginController::class, 'index']);
    });

    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::group(['prefix' => 'business'], function() {
            Route::get('/', [BusinessController::class, 'index']);
            Route::post('store', [BusinessController::class, 'store']);
        });
        Route::group(['prefix' => 'client'], function() {
            Route::get('/', [ClientController::class, 'index']);
            Route::post('/store', [ClientController::class, 'store']);
        });

        Route::group(['prefix' => 'order'], function() {
            Route::get('/', [OrderController::class, 'index']);
            Route::post('/store', [OrderController::class, 'store']);
        });

        Route::group(['prefix' => 'notify'], function() {
            Route::get('/{customer}', [NotifyController::class, 'notify']);
        });
    });
});

// Route::group(['prefix' => 'v2'], function() {
//     Route::get('/', function() {
//         return 'Welcome to sales api. This is v2.0';
//     });
// });
