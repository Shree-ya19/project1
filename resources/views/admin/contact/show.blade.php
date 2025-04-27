@extends('admin.layout.master')

@section('container')
    <div class="container mt-4">
        <h2>View Message</h2>
        <div class="card p-4 shadow-sm">
            <p><strong>Full Name:</strong> {{ $message->full_name }}</p>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Message:</strong><br>{{ $message->message }}</p>
            <p><strong>Status:</strong> 
                @if ($message->status)
                    <span class="badge bg-success">Seen</span>
                @else
                    <span class="badge bg-warning">Unseen</span>
                @endif
            </p>

            <a href="{{ route('admin.contact.index') }}" class="btn "style="background-color: #00440b;color:#e7d31f">Back to Messages</a>
        </div>
    </div>
@endsection
