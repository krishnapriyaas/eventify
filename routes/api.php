<?php

use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\SavingsPlanController;
use Illuminate\Support\Facades\Route;

Route::post('/savings-plans', [SavingsPlanController::class, 'store']);
Route::get('/savings-plans/{id}', [SavingsPlanController::class, 'show']);
Route::post('/savings-plans/{id}/execute', [SavingsPlanController::class, 'execute']);
Route::get('/portfolio/{userId}', [PortfolioController::class, 'show']);