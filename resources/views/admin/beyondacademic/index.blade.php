@extends('admin.layout.master')

@section('container')

<div class="container mt-5"style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Beyond Academics</h2>

    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('admin.beyondacademic.create') }}" class="btn" style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">
             Add 
        </a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Activity</th>
                <th>Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beyondacademics as $beyondacademic)
                <tr>
                    <td>{{ $beyondacademic->id }}</td>
                    <td>{{ $beyondacademic->activity }}</td>
                    <td>
                        @foreach($beyondacademic->images as $activityimage)
                            <img src="{{ $activityimage->image }}" width="100" class="mb-1 me-1" alt="Activity Image">
                        @endforeach
                    </td>
                    <td>
    <div class="d-flex justify-content-start">
        <a href="{{ route('admin.beyondacademic.show', $beyondacademic) }}" class="btn btn-sm btn-primary me-2">View</a>
        <a href="{{ route('admin.beyondacademic.edit', $beyondacademic) }}" class="btn btn-sm btn-success me-2">Edit</a>
        <form action="{{ route('admin.beyondacademic.destroy', $beyondacademic) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this activity?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
</td>


                </tr>
            @empty
                <tr>
                    <td colspan="5">No activities found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
