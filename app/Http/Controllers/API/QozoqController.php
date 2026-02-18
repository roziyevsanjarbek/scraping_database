<?php

namespace App\Http\Controllers\API;

use App\Exports\QozoqExport;
use App\Http\Controllers\Controller;
use App\Models\Qozoq;
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


    public function index(Request $request)
    {
        $query = Qozoq::query();

        if ($request->boundary_name) {

            // 🔥 Tire normalize qilamiz
            $boundary = str_replace('–', '-', $request->boundary_name);

            $query->whereRaw("
            REPLACE(boundary_name, '–', '-')
            LIKE ?
        ", ["%$boundary%"]);
        }

        if ($request->car_number) {
            $query->where('car_number', 'like', '%' . $request->car_number . '%');
        }

        if ($request->date) {
            $query->whereDate('date_and_time', $request->date);
        }

        if ($request->status) {
            $query->where('status', 'like', '%' . $request->status . '%');
        }

        $data = $query->orderBy('id','desc')->paginate(30);

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function export(Request $request)
    {
        return Excel::download(
            new QozoqExport($request),
            'qozoq.xlsx'
        );
    }


}
