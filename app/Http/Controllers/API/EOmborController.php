<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ATEomborImport;
use Maatwebsite\Excel\Facades\Excel;

class EOmborController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new ATEomborImport, $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
