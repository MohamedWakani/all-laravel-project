<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use App\Models\UserExcel;

class ImportData implements ToModel, WithHeadingRow
{
    private $formationId;

    public function __construct($formationId)
    {
        $this->formationId = $formationId;
    }
    public function model(array $row)
    {
        // Example: Check if 'name' column is not empty before creating a new instance
        if (!empty($row['name'])) {
            return new UserExcel([
                'name' => $row['name'],
                'email' => $row['email'],
                'formation_id' => $this->formationId,
                // Map more columns as needed
            ]);
        }
        
        // If 'name' is empty or doesn't meet validation criteria, return null to skip this record.
        return null;
    }
    
    
    }
    