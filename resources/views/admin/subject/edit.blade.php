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
        <h2 class="section-title mb-4">Edit Subject</h2>

        <form action="{{ route('admin.subject.update', $subject) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $subject->title }}" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="number" name="position" class="form-control" id="position" value="{{ $subject->position }}" required>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" value="{{ $subject->slug }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Level:</label>
                <select name="level_id" class="form-control">
                    <option value="">Select Level</option>
                    @foreach($levels as $level)
                    </option>
                 @foreach ($level->levels as $class)
                <option value="{{ $class->id }}" {{ old('level_id',$subject->leve_id)== $class->id ? 'selected':'' }}>
                {{ $class->title }}
                 </option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-submit"style="background-color: #00440b; color: #e7d31f; border-color: #00440b;"> Save Level</button>
            <a href="{{ route('admin.subject.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
        </form>
    </div>
</div>

@endsection
