<?php

namespace App\Imports;

use App\Models\RWEOmbor;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RWEomborImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new RWEOmbor([
            'document_number'  => $row['document_number'] ?? null,
            'custom_code'      => $row['custom_code'] ?? null,
            'custom_date'      => isset($row['custom_date'])
                ? Carbon::parse($row['custom_date'])->format('Y-m-d')
                : null,
            'TEBHN_number'     => $row['tebhn_number'] ?? null,
            'transport_number' => $row['transport_number'] ?? null,
            'gross_weight'     => $row['gross_weight'] ?? null,
            'inn'              => $row['inn'] ?? null,
            'recipient_name'   => $row['recipient_name'] ?? null,
            'delivery_post'    => $row['delivery_post'] ?? null,
            'delivery_date'    => isset($row['delivery_date'])
                ? Carbon::parse($row['delivery_date'])->format('Y-m-d')
                : null,
            'arrival_place'    => $row['arrival_place'] ?? null,
            'status'           => $row['status'] ?? null,
//            'company_name'     => null, // hozircha bosh qoladi
        ]);
    }
}
