<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/turkey-scraping', [HomeController::class, 'turkeyScraping'])->name('turkeyScraping');
Route::get('/belarus-scraping', [HomeController::class, 'belarusScraping'])->name('belarusScraping');
Route::get('/e-ombor-scraping', [HomeController::class, 'eOmborScraping'])->name('eOmborScraping');
Route::get('/qozoq-scraping', [HomeController::class, 'qozoqScraping'])->name('qozoqScraping');
Route::get('/mintrans-scraping', [HomeController::class, 'mintransScraping'])->name('mintransScraping');
