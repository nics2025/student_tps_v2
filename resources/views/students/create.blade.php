@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Contact</label>
            <input type="text" name="contact" class="form-control">
        </div>

        <div class="mb-3">
    <label for="section_id">Section</label>
    <select name="section_id" id="section_id" class="form-control" required>
    <option value="">-- Select Section --</option>
    @foreach($sections as $section)
        <option value="{{ $section->id }}"
            {{ old('section_id', request('section_id')) == $section->id ? 'selected' : '' }}>
            {{ $section->name }}
        </option>
    @endforeach
</select>
</div>


        <button class="btn btn-success">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
