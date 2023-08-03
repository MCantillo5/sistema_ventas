<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments.index',[
            'departments' => Category::paginate()
        ]);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        Category::create($data);

        return back()->with('massage', 'Department created successfully');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }
    public function update(Department $department, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        $department->update($data);

        return back()->with('massage', 'Department updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('message', 'Department deleted.');
    }
}
