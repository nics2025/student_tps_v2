@extends('layouts.app')

@section('content')
<h2>Add Section</h2>

<form action="{{ route('sections.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control">
    </div>

    <button class="btn btn-primary">Save</button>
    <a href="{{ route('sections.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
