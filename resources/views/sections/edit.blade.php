@extends('layouts.app')

@section('content')
<h2>Edit Section</h2>

<form action="{{ route('sections.update', $section) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $section->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control" value="{{ $section->description }}">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('sections.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
