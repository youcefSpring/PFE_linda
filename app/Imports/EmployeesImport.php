<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class EmployeesImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        // dd($row);
        // dd($row);
        return new Employee([
            'matricule'     => $row[0],
            'nom'    => $row[1],
            'prenom'=> $row[2],
            'email' =>$row[3]

        ]);
    }
}
