<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Imports\AviaEomborImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AVIAEomborController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        try {
            Excel::import(new AviaEomborImport, $request->file('file'));

            return response()->json([
                'status' => true,
                'message' => 'Excel muvaffaqiyatli yuklandi'
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => 'Xatolik yuz berdi',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
