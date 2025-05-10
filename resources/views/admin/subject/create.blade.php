@extends('admin.layout.master')
@section('container')

<style>
    .form-section {
        border: 4px solid #00440b;
        padding: 2rem;
        margin-top: 2rem;
        background-color: #f9f9f9;
    }

    .section-title {
        color: #00440b;
    }

    .btn-save {
        background-color: #00440b;
        color: #fff;
    }

    .btn-save:hover {
        background-color: #003308;
        color: #e7d31f;
    }
</style>

<div class="container">
    <div class="form-section shadow-sm">
        <h2 class="section-title mb-4">Add Subjects</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('admin.subject.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="number" name="position" class="form-control" id="position" required>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Level:</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Level</option>
                    @foreach($levels as $level)
                        <option value="" disabled>{{ $level->title }}</option>
                        @foreach ($level->levels as $class)
                            <option value="{{ $class->id }}">{{ $class->title }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <!-- Submit and Back buttons placed inside the form -->
            <button type="submit" class="btn btn-submit" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;"> Save </button>
            <a href="{{ route('admin.subject.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
        </form>
    </div>
</div>

@endsection
