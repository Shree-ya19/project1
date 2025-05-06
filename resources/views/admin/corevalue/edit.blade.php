@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Edit Core Value</h2>

    <form action="{{ route('admin.corevalue.update', $corevalue->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $corevalue->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="describe" class="form-label">Description <span class="text-danger">*</span></label>
            <textarea name="describe" class="form-control" rows="4" required>{{ old('describe', $corevalue->describe) }}</textarea>
        </div>

        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Update</button>
        <a href="{{ route('admin.corevalue.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
    </form>
</div>

@endsection
