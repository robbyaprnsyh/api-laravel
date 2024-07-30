<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Manual Liga
// Route::get('liga', [LigaController::class, 'index']);
// Route::post('liga', [LigaController::class, 'store']);
// Route::get('liga/{id}', [LigaController::class, 'show']);
// Route::put('liga/{id}', [LigaController::class, 'update']);
// Route::delete('liga/{id}', [LigaController::class, 'destroy']);

// Matic Liga
use App\Http\Controllers\Api\LigaController;
Route::resource('liga', LigaController::class)->except(['edit', 'create']);

// Matic Klub
use App\Http\Controllers\Api\KlubController;
Route::resource('klub', KlubController::class)->except(['edit', 'create']);

// Matic Pemain
use App\Http\Controllers\Api\PemainController;
Route::resource('pemain', PemainController::class)->except(['edit', 'create']);

// Matic Fan
use App\Http\Controllers\Api\FanController;
Route::resource('fan', FanController::class)->except(['edit', 'create']);
