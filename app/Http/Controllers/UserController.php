<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportStudents;
use App\Imports\ImportScience;
use App\Exports\StudentsExport;

class UserController extends Controller
{
    public function index(Request $request)
    {
    
        return view('index');
    }

    public function store(Request $request)
    {
        Excel::import(
            new ImportStudents,
            $request->file('file')->store('files')
        );
        return redirect()->back()->with('status','succefully ecxcel import');
    } public function science(Request $request)
    {
        Excel::import(
            new ImportScience,
            $request->file('file')->store('files')
        );
        return redirect()->back()->with('status','succefully ecxcel import');
    }

    public function exportUsers(Request $request)
    {
        return Excel::download(new StudentsExport, 'saiful.xlsx');
    }
}
