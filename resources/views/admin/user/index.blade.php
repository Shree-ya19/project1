@extends('admin.layout.master')

@section('container')
<style>
    .custom-card {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .custom-header {
        background-color: #00440b;
        color: #e7d31f;
        padding: 1rem 1.5rem;
        border-bottom: 2px solid #e7d31f;
    }

    .custom-header h4 {
        margin: 0;
        font-weight: 600;
    }

    .custom-table thead {
        background-color: #e7d31f;
        color: #00440b;
    }

    .custom-table tbody tr:hover {
        background-color: #f1f5f3;
    }

    .user-image {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #00440b;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .text-muted {
        color: #999 !important;
    }

    .fw-semibold {
        font-weight: 600;
    }
    .user{
        color:#e7d31f;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="card custom-card">
        <div class="custom-header d-flex justify-content-between align-items-center">
            <h4 class="user"><i class="bi bi-person-fill"></i> Users List</h4>
        </div>

        <div class="card-body">
            <table class="table table-hover custom-table text-center align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-semibold">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @if($user->image)
                                    <img src="{{ $user->image }}" alt="User Image" class="user-image">
                                @else
                                    <span class="text-muted">N/A</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-muted">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
