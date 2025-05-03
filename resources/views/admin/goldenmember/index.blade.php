@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Golden ABC Members</h2>

    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('admin.goldenmember.create') }}" class="btn" style="background-color: #00440b; color: #e7d31f; border-color: #00440b;">
            Add
        </a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover text-center align-middle">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($goldenmembers as $goldenmember)
                <tr>
                    <td>{{ $loop->iteration }}</td><!-- 1,2,3.....-->
                    <td>
                        @if($goldenmember->image)
                            <img src="{{ $goldenmember->image }}" width="60" height="60" class="rounded-circle" alt="{{ $goldenmember->name }}">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>{{ $goldenmember->name }}</td>
                    <td class="text-capitalize">{{ $goldenmember->role }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.goldenmember.show',$goldenmember) }}" class="btn btn-sm btn-primary me-2">View</a>
                            <a href="{{ route('admin.goldenmember.edit', $goldenmember) }}" class="btn btn-sm btn-success me-2">Edit</a>
                            <form action="{{ route('admin.goldenmember.destroy', $goldenmember) }}" method="POST" onsubmit="return confirm('Delete this member?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No members found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
