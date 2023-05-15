<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Training;

class TrainingImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Training([
            'nama' => $row[0],
            'umur' => $row[1], 
            'berat_badan' => $row[2], 
            'tinggi_badan' => $row[3], 
            'lingkar_atas' => $row[4], 
            'status' => $row[5], 
        ]);
    }
}
