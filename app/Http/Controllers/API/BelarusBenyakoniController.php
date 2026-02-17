<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Imports\BelarusBenyakoniImport;
use Illuminate\Http\Request;
use App\Imports\BelarusBrestImport;
use Maatwebsite\Excel\Facades\Excel;

class BelarusBenyakoniController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new BelarusBenyakoniImport(), $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Belarus Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
