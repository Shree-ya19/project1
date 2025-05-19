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

    .text-muted {
        color: #999 !important;
    }

    .fw-semibold {
        font-weight: 600;
    }

    .user {
        color: #e7d31f;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="card custom-card">
        <div class="custom-header d-flex justify-content-between align-items-center">
            <h4 class="user"><i class="bi bi-person-fill"></i> Registered Customers List</h4>
        </div>

        <div class="card-body">
            <table class="table table-hover custom-table text-center align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->created_at->format('d M, Y h:i A') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">No customers registered yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
