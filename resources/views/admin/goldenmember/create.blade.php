@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Add Golden ABC Member</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.goldenmember.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold" value="{{ old('name') }}">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <!-- Role -->
        <div class="mb-3">
            <label for="role" class="form-label fw-semibold" value="{{ old('role') }}">Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="">-- Select Role --</option>
                <option value="principal">Principal</option>
                <option value="teacher">Teacher</option>
                <option value="shareholder">Shareholder</option>
                <option value="shareholder">Other dedicated members</option>
                <!-- Add more roles if needed -->
            </select>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Submit -->
        <div class="text-end">
    <a href="{{ route('admin.goldenmember.index') }}" class="btn me-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
        ← Back
    </a>
    
    <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
        Save Member
    </button>
</div>

    </form>
</div>

@endsection
