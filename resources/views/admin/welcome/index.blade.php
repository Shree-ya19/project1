@extends('admin.layout.master')

@section('container')
<div class="container mt-4" style="margin-bottom:90px;">
    <div class="d-flex justify-content-between mb-3">
        <h4>Latest News</h4>
        <a href="{{ route('admin.welcome.create') }}" class="btn btn-primary" style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">Add Event</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Caption</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($welcomes as $welcome)
                <tr>
                    <td>{{ $welcome->title }}</td>
                    <td>{{ $welcome->caption }}</td>
                    <td>
                        @if($welcome->image)
                            <img src="{{ $welcome->image }}" alt="Event Image" width="80">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('admin.welcome.edit',$welcome) }}" class="btn btn-sm btn-warning">Edit</a>

                        <!-- View button -->
                        <a href="{{ route('admin.welcome.show',$welcome) }}" class="btn btn-primary btn-sm">View</a>

                        <!-- Delete form -->
                        <form action="{{ route('admin.welcome.destroy',$welcome) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this event?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No data found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
