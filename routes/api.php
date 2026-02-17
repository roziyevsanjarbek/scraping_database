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

Route::post('/rw-e-ombor/import', [RWEomborController::class, 'import']);

Route::post('/at-e-ombor/import', [EomborController::class, 'import']);


Route::post('/belarus-benyakoni/import', [BelarusBenyakoniController::class, 'import']);
Route::post('/belarus-brest/import', [BelarusBrestController::class, 'import']);
Route::post('/belarus-gigorovschina/import', [BelarusGigorovschinaController::class, 'import']);
Route::post('/belarus-komennii/import', [BelarusKomenniController::class, 'import']);
Route::post('/belarus-kozlovichi/import', [BelarusKozlovichiController::class, 'import']);


Route::post('/turkey/import', [TurkeyController::class, 'import']);



Route::post('/qozoq/import', [QozoqController::class, 'import']);




Route::post('/mintrans/import', [MintransController::class, 'import']);
