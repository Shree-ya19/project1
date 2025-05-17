@extends('admin.layout.master')

@section('container')

<div class="container mt-4" style="margin-bottom:90px;">
    <h4>Welcome Data</h4>

    <!-- Title Section -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <div class="container p-3" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            <p>{{ $welcome->title }}</p>
        </div>
    </div>

    <!-- Caption Section -->
    <div class="mb-3">
        <label for="caption" class="form-label">Caption</label>
        <div class="container p-3" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            <p>{{ $welcome->caption }}</p>
        </div>
    </div>

    <!-- Since Section -->
    <div class="mb-3">
        <label for="since" class="form-label">Since Paragraph</label>
        <div class="container p-3" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            <p>{!!  $welcome->since !!}</p>
        </div>
    </div>

    <!-- Why Section -->
    <div class="mb-3">
        <label for="why" class="form-label">Why Paragraph</label>
        <div class="container p-3" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            <p>{!!  $welcome->why !!}</p>
        </div>
    </div>

    <!-- Image Section -->
    @if ($welcome->image)
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <div class="container p-3" style="background-color: #f9f9f9; border: 1px solid #ddd;">
                <img src="{{ $welcome->image }}" alt="Current Image" class="mt-2" style="max-width: 150px;">
            </div>
        </div>
    @endif

    <a href="{{ route('admin.welcome.index') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">Back</a>
</div>

@endsection
