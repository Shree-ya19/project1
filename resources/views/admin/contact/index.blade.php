@extends('admin.layout.master')

@section('container')
    <h2>Contact Messages</h2>
    <table class="table" style="margin-bottom:90px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $message->full_name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message}}</td>
                <td>
                    @if ($message->status)
                        <span class="badge bg-success">Seen</span>
                    @else
                        <span class="badge bg-warning">Unseen</span>
                    @endif
                </td>
                <td>
    <a href="{{ route('admin.contact.show', $message) }}" class="btn btn-primary btn-sm">View</a>

    <form action="{{ route('admin.contact.destroy', $message) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this message?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">Delete</button>
    </form>
</td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
