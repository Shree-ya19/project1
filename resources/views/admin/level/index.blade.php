@extends('admin.layout.master')
@section('container')

<style>
    .levels-section {
        border: 4px solid #00440b;
        padding: 2rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background-color: #f9f9f9;
    }

    .section-title {
        color: #00440b;
    }

    .table thead {
        background-color: white;
        color: #fff;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }

    .action-btn {
        margin-right: 5px;
        background-color: #00440b;
        color:#e7d31f;
    }


    .btn-edit {
        background-color: #e7d31f;
        color: #00440b;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-add {
        background-color: #00440b;
        color: white;
    }

    .btn-add:hover {
        background-color: #003308;
        color:#e7d31f;
    }
</style>

<div class="container">
    <div class="levels-section shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title"> All Levels</h2>
            <a href="{{ route('admin.level.create') }}" class="btn btn-add"> Add New Level</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Class</th>
                        <th>Slug</th>
                        <th>Level</th>
                        <th>Position</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($levels as $index => $level)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $level->title }}</td>
                        <td>{{ $level->slug }}</td>
                        <td>{{ $level->level?->title }}</td>
                        <td>{{ $level->position }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.level.edit',$level) }}" class="btn btn-sm btn-edit action-btn"> Edit</a>
                            <form action="{{ route('admin.level.destroy',$level) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this level?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No levels found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
