@extends('admin.layout.master')

@section('container')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Interest Form Details</h2>

    <div class="card shadow-sm p-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Full Name:</strong> 
                <div>{{ $interest->full_name }}</div>
            </div>
            <div class="col-md-6">
                <strong>Email:</strong> 
                <div>{{ $interest->email }}</div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Phone Number:</strong> 
                <div>{{ $interest->phone_number }}</div>
            </div>
            <div class="col-md-6">
                <strong>Interest:</strong> 
                <div>{{ $interest->interest }}</div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Status:</strong> 
                <div>
                    @if($interest->status == 0)
                        <span class="badge bg-warning text-dark">Unseen</span>
                    @else
                        <span class="badge bg-success">Seen</span>
                    @endif
                </div>
            </div>
        </div>

        <hr>

        <div class="mb-3">
            <strong>Message:</strong>
            <div class="mt-2 p-3 bg-light rounded">
                {{ $interest->message }}
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('admin.interestform.index') }}" class="btn btn-secondary" style="background-color: #00440b;color:#e7d31f">Back to List</a>
        </div>
    </div>
</div>
@endsection
