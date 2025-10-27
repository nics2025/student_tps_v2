@extends('layouts.app')

@section('content')
<h2>Student Details</h2>

<table class="table">
    <tr><th>ID</th><td>{{ $student->id }}</td></tr>
    <tr><th>Full Name</th><td>{{ $student->first_name }} {{ $student->last_name }}</td></tr>
    <tr><th>Email</th><td>{{ $student->email }}</td></tr>
    <tr><th>Contact</th><td>{{ $student->contact }}</td></tr>
    <tr><th>Section</th><td>{{ $student->section->name ?? 'N/A' }}</td></tr>
</table>

<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
