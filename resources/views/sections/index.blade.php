@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Sections</h1>

    <a href="{{ route('sections.create') }}" class="btn btn-primary mb-3">Add Section</a>

    @foreach($sections as $section)
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <h5 class="mb-0">
                    {{ $section->name }} 
                    <small class="text-muted">{{ $section->description }}</small>
                </h5>
            </div>
            <div class="card-body">
                @if($section->students->isEmpty())
                    <p class="text-muted">No students in this section yet.</p>
                @else
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($section->students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->contact }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <a href="{{ route('students.create', ['section_id' => $section->id]) }}" class="btn btn-success">
                    Add Student to {{ $section->name }}
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
