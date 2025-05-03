@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Golden ABC Member Details</h2>

    <div class="mb-4">
        <a href="{{ route('admin.goldenmember.index') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            ← Back to List
        </a>

        <!-- Edit Button -->
        <a href="{{ route('admin.goldenmember.edit', $goldenmember->id) }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Edit Member
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Image -->
                <div class="col-md-4">
                    @if($goldenmember->image)
                        <img src="{{ $goldenmember->image }}" class="img-fluid rounded-circle" alt="{{ $goldenmember->name }}">
                    @else
                        <p>No Image</p>
                    @endif
                </div>

                <!-- Member Details -->
                <div class="col-md-8">
                    <h4>{{ $goldenmember->name }}</h4>
                    <p><strong>Role:</strong> {{ ucfirst($goldenmember->role) }}</p>
                    <p><strong>Description:</strong> {{ $goldenmember->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
