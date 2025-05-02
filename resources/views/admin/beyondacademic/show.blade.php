@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Activity Details</h2>

    <div class="card p-4">
        <div class="mb-3">
            <h5><strong>Activity:</strong></h5>
            <p>{{ $beyondacademic->activity }}</p>
        </div>

        <div class="mb-3">
            <h5><strong>Detail:</strong></h5>
            <p>{{ $beyondacademic->detail }}</p>
        </div>

        <div class="mb-3">
            <h5><strong>Images:</strong></h5>
            @if($beyondacademic->images->count())
                @foreach($beyondacademic->images as $activityimage)
                    <img src="{{ $activityimage->image }}" width="200" class="mb-3 me-2 rounded" alt="Activity Image">
                @endforeach
            @else
                <p>No images available.</p>
            @endif
        </div>

        <a href="{{ route('admin.beyondacademic.index') }}" class="btn btn-secondary mt-3"style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">← Back to List</a>
    </div>
</div>

@endsection
