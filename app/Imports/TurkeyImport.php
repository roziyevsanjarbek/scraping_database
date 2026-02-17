<?php

namespace App\Imports;

use App\Models\Turkey;
use App\Models\Auto;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TurkeyImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $carNumber = $row['avtomobil_raqami'] ?? null;

        $companyName = null;

        if ($carNumber) {
            $auto = Auto::where('state_number', $carNumber)->first();
            if ($auto) {
                $companyName = $auto->company_name;
            }
        }

        return new Turkey([
            'ordinal_number' => $row['tartib_raqami'] ?? null,
            'input_sequence_number' => $row['kirish_tartib_raqami'] ?? null,
            'car_number' => $carNumber,
            'date' => $this->parseDate($row['sana'] ?? null),
            'entrance' => $row['kirish_joyi'] ?? null,
            'company_name' => $companyName,
        ]);
    }

    private function parseDate($value)
    {
        if (empty($value)) return null;

        try {
            return Carbon::createFromFormat('d.m.Y H:i:s', $value)
                ->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}
