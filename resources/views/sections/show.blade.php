@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Section {{ $section->name }}</h2>

    <a href="{{ route('students.create') }}?section_id={{ $section->id }}" class="btn btn-primary mb-3">
        + Add Student to {{ $section->name }}
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->contact }}</td>
                    <td>{{ $student->section->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No students found in this section.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
