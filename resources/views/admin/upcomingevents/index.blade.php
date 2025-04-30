@extends('admin.layout.master')

@section('container')
<div class="container mt-4"style="margin-bottom:90px;">
    <div class="d-flex justify-content-between mb-3">
        <h4>Upcoming Events</h4>
        <a href="{{ route('admin.upcomingevents.create') }}" class="btn btn-primary" style="background-color: #00440b; color:#e7d31f; border-color:#00440b;">
            Add Event
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($upcomingEvents as $upcomingevents)
                <tr>
                    <td>{{ $upcomingevents->title }}</td>
                    <td>{{ $upcomingevents->date }}</td>
                    <td>
                        <a href="{{ route("admin.upcomingevents.edit",$upcomingevents) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.upcomingevents.destroy',$upcomingevents) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this event?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No Upcoming Events Found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
