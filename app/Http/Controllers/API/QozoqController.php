<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\QozoqImport;
use Maatwebsite\Excel\Facades\Excel;

class QozoqController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new QozoqImport, $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Qozoq Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
