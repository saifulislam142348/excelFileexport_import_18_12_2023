<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportStudents implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            "student_id" => 44,
            "user_id" => 1,
            "guardian_id" => 1,
            "relation" => 'son',
            "first_name" => $row[0],
            "last_name" => 0,
            "dob" => now(),
            "gender" => $row[3],
            "phone" => $row[4],
            "father_name" => $row[1],
            "mother_name" => $row[2],
            "present_address" =>'',
            "permanent_address" =>  '',
            "photo" => '',
            "status" => 1,
            
        ]);
    }
}
