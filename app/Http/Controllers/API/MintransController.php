<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\MintransImport;
use Maatwebsite\Excel\Facades\Excel;

class MintransController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new MintransImport, $request->file('file'));

        return response()->json([
            'status' => true,
            'message' => 'Mintrans Excel muvaffaqiyatli yuklandi'
        ]);
    }
}
