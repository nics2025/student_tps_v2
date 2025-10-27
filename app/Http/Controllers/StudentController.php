<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
{
    // Load only students, no sections
    $students = \App\Models\Student::all();

    return view('students.index', compact('students'));
}


    public function create()
{
    // Pull sections from DB
    $sections = \App\Models\Section::orderBy('name')->get();
    return view('students.create', compact('sections'));
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'email'       => 'required|email|unique:students,email',
            'contact'     => 'nullable|string|max:50',
            'section_id'  => 'required|exists:sections,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student added successfully!');
    }

    public function edit($id)
{
    $student = Student::findOrFail($id);
    $sections = Section::orderBy('name')->get();
    return view('students.edit', compact('student', 'sections'));
}

public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'first_name'  => 'required|string|max:255',
        'last_name'   => 'required|string|max:255',
        'email'       => 'required|email|unique:students,email,' . $student->id,
        'contact'     => 'nullable|string|max:50',
        'section_id'  => 'required|exists:sections,id',
    ]);

    $student->update($validated);

    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
}

public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
}

}
