<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ElectionController;

Route::get('/', [ElectionController::class, 'showStates'])->name('states');
Route::get('/{stateId}/lgas', [ElectionController::class, 'showLGAs'])->name('state.lgas');
Route::get('/{stateId}/{lgaId}/wardId', [ElectionController::class, 'showWards'])->name('lga.wards');
Route::get('/{stateId}/{lgaId}/{wardId}/polling-units', [ElectionController::class, 'showPollingUnits'])->name('ward.polling-units');
