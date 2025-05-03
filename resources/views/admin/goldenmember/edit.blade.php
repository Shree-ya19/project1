@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Edit Golden ABC Member</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.goldenmember.update', $goldenmember->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $goldenmember->name) }}" required>
        </div>

        <!-- Role -->
        <div class="mb-3">
            <label for="role" class="form-label fw-semibold">Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="">-- Select Role --</option>
                <option value="principal" {{ old('role', $goldenmember->role) == 'principal' ? 'selected' : '' }}>Principal</option>
                <option value="teacher" {{ old('role', $goldenmember->role) == 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="shareholder" {{ old('role', $goldenmember->role) == 'shareholder' ? 'selected' : '' }}>Shareholder</option>
                <option value="other" {{ old('role', $goldenmember->role) == 'other' ? 'selected' : '' }}>Other dedicated members</option>
            </select>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $goldenmember->description) }}</textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($goldenmember->image)
                <div class="mt-2">
                    <img src="{{ $goldenmember->image }}" alt="Current Image" width="100">
                </div>
            @endif
        </div>

        <!-- Buttons -->
        <div class="text-end">
            <a href="{{ route('admin.goldenmember.index') }}" class="btn me-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
                ← Back
            </a>
            <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
                Update Member
            </button>
        </div>
    </form>
</div>

@endsection
