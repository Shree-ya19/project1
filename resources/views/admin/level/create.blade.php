@extends('admin.layout.master')
@section('container')

<style>
    .form-section {
        border: 4px solid #00440b;
        padding: 2rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background-color: #f9f9f9;
    }

    .form-title {
        color: #00440b;
        margin-bottom: 1rem;
    }

    .btn-submit {
        background-color: #00440b;
        color: white;
    }

    .btn-submit:hover {
        background-color: #003308;
    }
</style>

<div class="container">
    <div class="form-section shadow-sm">
        <h2 class="form-title">Add New Level</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.level.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>

           

            <div class="mb-3">
                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" name="position" class="form-control" value="{{ old('position') }}">
            </div>

            <div class="mb-3">
                    <label for="category_id" class="form-label">Level </label>
                    <select class="form-select" name="level_id" id="level_id" aria-label="Floating label select example">
                        <option value="">Select Level</option> <!-- Default option -->
                        @foreach($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->title }}</option>
                       
                        @endforeach
                    </select>
                </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="editor" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-submit"style="background-color: #00440b; color: #e7d31f; border-color: #00440b;"> Save Level</button>
            <a href="{{ route('admin.level.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
        </form>
    </div>
</div>

@endsection
