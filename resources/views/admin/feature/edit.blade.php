@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Edit Feature</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.feature.update', $feature) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label fw-semibold">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $feature->title) }}" required>
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label for="icon" class="form-label fw-semibold">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $feature->icon) }}" required>
        </div>

        <!-- Current Image -->
        @if ($feature->image)
            <div class="mb-3">
                <label class="form-label fw-semibold">Current Image</label><br>
                <img src="{{ $feature->image }}" alt="Feature Image" width="100">
            </div>
        @endif

        <!-- Upload New Image -->
        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Change Image (optional)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <!-- Route Name -->
<div class="mb-3">
    <label for="route_name" class="form-label fw-semibold">Route Name (e.g., event_calander)</label>
    <input type="text" class="form-control" id="route_name" name="route_name" placeholder="event_calander" value="{{ old('route_name') }}" required>
</div>


        <!-- Submit -->
        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f;">
            Update
        </button>

        <a href="{{ route('admin.feature.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f;">Back</a>
    </form>
</div>

@endsection
