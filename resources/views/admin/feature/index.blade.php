@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Features</h2>

    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('admin.feature.create') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Add
        </a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover text-center align-middle">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Icon</th>
                <th>Route Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>
    @if($feature->image)
        <img src="{{ $feature->image }}" alt="Feature Image" width="80" height="80">
    @else
        No Image
    @endif
</td>
                    <td>{{ $feature->title }}</td>
                    <td>{{ $feature->icon }}</td>
                    <td>{{ $feature->route_name }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.feature.edit',$feature) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('admin.feature.destroy',$feature) }}" method="POST" onsubmit="return confirm('Delete this value?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No core values found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
