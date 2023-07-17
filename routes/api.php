<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProgramController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

*/

Route::get('/partners', [PartnerController::class, 'index']);
Route::get('/partners/search/{id}', [PartnerController::class, 'search']);
Route::get('/partners/{id}', [PartnerController::class, 'show']);
Route::get('/transfer', [PartnerController::class, 'getTransferRateAndTime']);
Route::get('/programs', [ProgramController::class, 'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
