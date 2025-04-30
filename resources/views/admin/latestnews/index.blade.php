@extends('admin.layout.master')

@section('container')
<div class="container mt-4" style="margin-bottom:90px;">
    <div class="d-flex justify-content-between mb-3">
        <h4>Latest News</h4>
        <a href="{{ route('admin.latestnews.create') }}" class="btn btn-primary" style="background-color: #00440b;color:#e7d31f;border-color:#00440b;">Add Event</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Date</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($latestNews as $latestnews)
                <tr>
                    <td>
                        @if($latestnews->image)
                        <img src="{{ $latestnews->image }}" alt="Event Image" width="80">

                        @else
                        No Image
                        @endif
                    </td>
                    <td>{{ $latestnews->title }}</td>
                    <td>{{ $latestnews->date }}</td>
                    
                    <td>
                        <a href="{{ route('admin.latestnews.edit', $latestnews) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.latestnews.destroy', $latestnews) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this event?')">Delete</button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No Latest News Found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection