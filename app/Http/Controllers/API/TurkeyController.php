<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\TurkeyImport;
use Maatwebsite\Excel\Facades\Excel;

class TurkeyController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new TurkeyImport, $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Turkey Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
