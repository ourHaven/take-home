<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\OrganizationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/organizations', [OrganizationController::class, 'store']);
// Route::put('/organizations/{id}/rules', [OrganizationController::class, 'updateResetInterval']);

// Route::post('/users', [UserController::class, 'store']);

// Route::get('/users/{id}/wallet', [WalletController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/organizations', [OrganizationController::class, 'store']);
    Route::put('/organizations/{id}/rules', [OrganizationController::class, 'updateResetInterval']);

    Route::post('/users', [UserController::class, 'store']);

    Route::get('/users/{id}/wallet', [WalletController::class, 'show']);
});
