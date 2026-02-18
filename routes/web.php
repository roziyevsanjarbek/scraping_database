<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/turkey-scraping', [HomeController::class, 'turkeyScraping'])->name('turkeyScraping');
Route::get('/belarus-scraping', [HomeController::class, 'belarusScraping'])->name('belarusScraping');
Route::get('/qozoq-scraping', [HomeController::class, 'qozoqScraping'])->name('qozoqScraping');
Route::get('/mintrans-scraping', [HomeController::class, 'mintransScraping'])->name('mintransScraping');


Route::get('/e-ombor-AT-scraping', [HomeController::class, 'eOmborATScraping'])->name('eOmborATScraping');
Route::get('/e-ombor-RW-scraping', [HomeController::class, 'eOmborRWScraping'])->name('eOmborRWScraping');
Route::get('/e-ombor-AVIA-scraping', [HomeController::class, 'eOmborAVIAScraping'])->name('eOmborAVIAScraping');
