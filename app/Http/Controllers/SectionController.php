<?php


namespace App\Http\Controllers;


use App\Models\Section;
use Illuminate\Http\Request;


class SectionController extends Controller
{
public function index()
{
    $sections = \App\Models\Section::with('students')->get();

    return view('sections.index', compact('sections'));
}



public function create()
{
return view('sections.create');
}


public function store(Request $request)
{
$validated = $request->validate([
'name' => 'required|string|max:50|unique:sections,name',
'description' => 'nullable|string|max:255',
]);


Section::create($validated);


return redirect()->route('sections.index')->with('success', 'Section created successfully.');
}


public function show($id)
{
    $section = Section::findOrFail($id);
    $students = $section->students()->get();

    return view('sections.show', compact('section', 'students'));
}



public function edit(Section $section)
{
return view('sections.edit', compact('section'));
}


public function update(Request $request, Section $section)
{
$validated = $request->validate([
'name' => 'required|string|max:50|unique:sections,name,' . $section->id,
'description' => 'nullable|string|max:255',
]);


$section->update($validated);


return redirect()->route('sections.index')->with('success', 'Section updated successfully.');
}


public function destroy(Section $section)
{
$section->delete();
return redirect()->route('sections.index')->with('success', 'Section deleted successfully.');
}


}