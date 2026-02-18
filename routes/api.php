<?php

use App\Http\Controllers\API\AVIAEomborController;
use App\Http\Controllers\API\BelarusBenyakoniController;
use App\Http\Controllers\API\BelarusBrestController;
use App\Http\Controllers\API\BelarusGigorovschinaController;
use App\Http\Controllers\API\BelarusKomenniController;
use App\Http\Controllers\API\BelarusKozlovichiController;
use App\Http\Controllers\API\EOmborController;
use App\Http\Controllers\API\MintransController;
use App\Http\Controllers\API\QozoqController;
use App\Http\Controllers\API\RWEomborController;
use App\Http\Controllers\API\TurkeyController;
use Illuminate\Support\Facades\Route;


Route::post('/avia-eombor/import', [AVIAEomborController::class, 'import']);
Route::get('/avia-e-ombor', [AVIAEomborController::class, 'index']);
Route::get('/avia-e-ombor/export', [AVIAEomborController::class, 'export']);


Route::post('/rw-e-ombor/import', [RWEomborController::class, 'import']);
Route::get('/rw-e-ombor', [RWEomborController::class, 'index']);
Route::get('/rw-e-ombor/export', [RwEOmborController::class, 'export']);

Route::post('/at-e-ombor/import', [EomborController::class, 'import']);
Route::get('/at-e-ombor', [EomborController::class, 'index']);
Route::get('/at-e-ombor/export', [EomborController::class, 'export']);


Route::post('/belarus-benyakoni/import', [BelarusBenyakoniController::class, 'import']);
Route::post('/belarus-brest/import', [BelarusBrestController::class, 'import']);
Route::post('/belarus-gigorovschina/import', [BelarusGigorovschinaController::class, 'import']);
Route::post('/belarus-komennii/import', [BelarusKomenniController::class, 'import']);
Route::post('/belarus-kozlovichi/import', [BelarusKozlovichiController::class, 'import']);


Route::post('/turkey/import', [TurkeyController::class, 'import']);
Route::get('/turkey', [TurkeyController::class, 'index']);
Route::get('/turkey/export', [TurkeyController::class, 'export']);



Route::post('/qozoq/import', [QozoqController::class, 'import']);




Route::post('/mintrans/import', [MintransController::class, 'import']);
