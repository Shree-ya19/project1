@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom: 90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Add Features</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.feature.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label fw-semibold">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}" required>
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label for="icon" class="form-label fw-semibold">Icon (Bootstrap icon class, e.g., 'bi-heart-fill')</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="bi-example-icon"   value="{{ old('icon') }}" required>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>(Recomended same image size for all 4 data)
            <input type="file" class="form-control" id="image" name="image" accept="image/*"required>
        </div>

       <!-- Route Name -->
<div class="mb-3">
    <label for="route_name" class="form-label fw-semibold">Route Name (e.g., event_calander)</label>
    <input type="text" class="form-control" id="route_name" name="route_name" placeholder="event_calander" value="{{ old('route_name') }}" required>
</div>


        <!-- Submit Button -->
        <button type="submit" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Save 
        </button>

        <!-- Back Button -->
        <a href="{{ route('admin.feature.index') }}" class="btn btn-secondary ms-2" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
    </form>
</div>

@endsection
