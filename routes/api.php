<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;

Route::prefix('v1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::apiResource('products', ProductController::class);
    });
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{product}', [ProductController::class, 'show']);
    Route::post('/products', [ProductController::class, 'store'])->middleware('auth:sanctum');
    Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth:sanctum');
    });