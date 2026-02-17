<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Imports\BelarusKozlovichiImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BelarusKozlovichiController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new BelarusKozlovichiImport(), $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Belarus Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
