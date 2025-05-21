@extends('admin.layout.master')
@section('container')
<style>
    .container
    {
        margin-bottom:100px;
    }
    </style>

<div class="container">
    <div class="levels-section shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">All Reviews</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Approval</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reviews as $review)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->relation }}</td>
                        <td>
                            @if($review->is_approved)
                                <span class="text-success">Approved</span>
                            @else
                                <span class="text-warning">Pending</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.review.show', $review) }}" class="btn btn-sm btn-primary action-btn">Show</a>

                            @if(!$review->is_approved)
                                <form action="{{ route('admin.review.approve', $review) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                </form>
                            @endif

                            <form action="{{ route('admin.review.destroy', $review) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this review?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">No reviews found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
