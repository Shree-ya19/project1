@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Our Core Values</h2>

    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('admin.corevalue.create') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Add
        </a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover text-center align-middle">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($corevalues as $corevalue)
                <tr>
                    <td>{{ $corevalue->id }}</td>
                    <td>{{ $corevalue->title }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.corevalue.edit', $corevalue) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('admin.corevalue.destroy', $corevalue) }}" method="POST" onsubmit="return confirm('Delete this value?');">
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
