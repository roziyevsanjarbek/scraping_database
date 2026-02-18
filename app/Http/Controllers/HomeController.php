<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function turkeyScraping()
    {
        return view('turkey-scraping');
    }

    public function belarusScraping()
    {
        return view('belarus-scraping');
    }

    public function eOmborScraping()
    {
        return view('e-ombor-scraping');
    }

    public function qozoqScraping()
    {
        return view('qozoq-scraping');
    }

    public function mintransScraping()
    {
        return view('mintrans-scraping');
    }

    public function eOmborATScraping()
    {
        return view('eombor.e-ombor-AT-scraping');
    }

    public function eOmborRWScraping()
    {
        return view('eombor.e-ombor-RW-scraping');
    }

    public function eOmborAVIAScraping()
    {
        return view('eombor.e-ombor-AVIA-scraping');
    }
}
