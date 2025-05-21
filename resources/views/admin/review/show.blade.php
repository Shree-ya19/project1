@extends('admin.layout.master')

@section('container')

<div class="container">
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Review Details</h4>
        </div>
        <div class="card-body">

            <div class="mb-3">
                <strong>Name:</strong>
                <p>{{ $review->name }}</p>
            </div>

            <div class="mb-3">
                <strong>Relation:</strong>
                <p>{{ $review->relation }}</p>
            </div>

            <div class="mb-3">
                <strong>Message:</strong>
                <p>{{ $review->message }}</p>
            </div>

            <div class="mb-3">
                <strong>Approval Status:</strong>
                <p>
                    @if($review->is_approved)
                        <span class="badge bg-success">Approved</span>
                    @else
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </p>
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.review.index') }}" class="btn btn-secondary"  style="background-color: #00440b;color:#e7d31f">Back to All Reviews</a>
            </div>
        </div>
    </div>
</div>

@endsection
r