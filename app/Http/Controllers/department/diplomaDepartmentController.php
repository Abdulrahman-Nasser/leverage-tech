<?php

namespace App\Http\Controllers\department;

use App\Http\Controllers\Controller;
use App\Models\diplomaDepartment\department;
use Illuminate\Http\Request;

class diplomaDepartmentController extends Controller
{
    // function index to return back view of department
    public function index()
    {
        return view('diploma-department.add-department');
    }

    // storing department into database
    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|min:2|max:15',
        ]);

        $department = new department();
        $department->department_name = $request->department_name;
        $department->save();
        return redirect()->back()->with('done', 'Department Added Successfuly');
    }
}
