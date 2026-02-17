<?php

namespace App\Imports;

use App\Models\Qozoq;
use App\Models\Auto;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QozoqImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // 🔹 Car numberni tozalaymiz
        $carNumber = isset($row['mashina_raqami'])
            ? strtoupper(trim($row['mashina_raqami']))
            : null;

        // 🔹 Autosdan kompaniya topamiz
        $companyName = null;

        if ($carNumber) {
            $auto = Auto::whereRaw('UPPER(TRIM(state_number)) = ?', [$carNumber])->first();

            if ($auto) {
                $companyName = $auto->company_name;
            }
        }

        return new Qozoq([
            'boundary_name' => $row['chegara_nomi'] ?? null,
            'car_number' => $carNumber,
            'date_and_time' => $this->parseDateTime($row['sana_va_vaqt'] ?? null),
            'status' => $row['status'] ?? null,
            'company_name' => $companyName,
        ]);
    }

    private function parseDateTime($value)
    {
        if (empty($value)) {
            return null;
        }

        try {
            // Agar format: "17.02.2026 17.02.2026"
            $parts = explode(' ', $value);

            // Birinchi qismini olamiz (sana)
            $datePart = $parts[0];

            return Carbon::createFromFormat('d.m.Y', $datePart)
                ->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}
