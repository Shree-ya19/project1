@extends('admin.layout.master')

@section('container')
<h2 class="text-center mb-4">Interest Forms</h2>

<div class="container mt-3"style="margin-bottom:90px;">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Interest</th>
                <th>Phone Number</th>
                <th>Status</th> <!-- Added Status Column -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($interests as $interest)
                <tr>
                    <td>{{ $interest->id }}</td>
                    <td>{{ $interest->full_name }}</td>
                    <td>{{ $interest->email }}</td>
                    <td>{{ $interest->interest }}</td>
                    <td>{{ $interest->phone_number }}</td>

                    <!-- Status -->
                    <td>
                        @if($interest->status == 0)
                            <span class="badge bg-warning text-dark">Unseen</span>
                        @else
                            <span class="badge bg-success">Seen</span>
                        @endif
                    </td>

                    <!-- Actions -->
                    <td>
                        <a href="{{ route('admin.interestform.show', $interest->id) }}" class="btn btn-info">View</a>

                        <form action="{{ route('admin.interestform.destroy', $interest->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
