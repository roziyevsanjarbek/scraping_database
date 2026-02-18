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
Route::get('/belarus-benyakoni', [BelarusBenyakoniController::class, 'index']);
Route::get('/belarus-benyakoni/export', [BelarusBenyakoniController::class, 'export']);



Route::post('/belarus-brest/import', [BelarusBrestController::class, 'import']);
Route::get('/belarus-brest', [BelarusBrestController::class, 'index']);
Route::get('/belarus-brest/export', [BelarusBrestController::class, 'export']);


Route::post('/belarus-gigorovschina/import', [BelarusGigorovschinaController::class, 'import']);
Route::get('/belarus-gigorovschina', [BelarusGigorovschinaController::class, 'index']);
Route::get('/belarus-gigorovschina/export', [BelarusGigorovschinaController::class, 'export']);


Route::post('/belarus-komennii/import', [BelarusKomenniController::class, 'import']);
Route::get('/belarus-komennii', [BelarusKomenniController::class, 'index']);
Route::get('/belarus-komennii/export', [BelarusKomenniController::class, 'export']);


Route::post('/belarus-kozlovichi/import', [BelarusKozlovichiController::class, 'import']);
Route::get('/belarus-kozlovichi', [BelarusKozlovichiController::class, 'index']);
Route::get('/belarus-kozlovichi/export', [BelarusKozlovichiController::class, 'export']);




Route::post('/turkey/import', [TurkeyController::class, 'import']);
Route::get('/turkey', [TurkeyController::class, 'index']);
Route::get('/turkey/export', [TurkeyController::class, 'export']);



Route::post('/qozoq/import', [QozoqController::class, 'import']);
Route::get('/qozoq', [QozoqController::class, 'index']);
Route::get('/qozoq/export', [QozoqController::class, 'export']);




Route::post('/mintrans/import', [MintransController::class, 'import']);
Route::get('/mintrans', [MintransController::class, 'index']);
Route::get('/mintrans/export', [MintransController::class, 'export']);

