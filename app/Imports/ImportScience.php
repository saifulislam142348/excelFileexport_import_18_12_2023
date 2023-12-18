<?php

namespace App\Imports;

use App\Models\Science;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportScience implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Science([
            "student_id" => $row[0] ?? '',
            "user_id" => $row[1] ?? '',
            "guardian_id" => $row[2] ?? '',
            "relation" => $row[3] ?? '',
            "first_name" => $row[4] ?? '',
            "last_name" => $row[5] ?? '',
            "dob" => $row[6] ?? '',
            "gender" => $row[7] ?? '',
            "phone" => $row[8] ?? '',
            "father_name" => $row[9] ?? '',
            "mother_name" => $row[10] ?? '',
            "present_address" => $row[11] ?? '',
            "permanent_address" => $row[12] ?? '',
            "photo" => $row[13] ?? '',
            "created_by" => $row[14] ?? '',
            "updated_by" => $row[15] ?? '',
            "status" => $row[16] ?? '',
            "deleted_at" => $row[17] ?? '',
            "deleted_by" => $row[18] ?? '',
          
        ]);
    }
}
